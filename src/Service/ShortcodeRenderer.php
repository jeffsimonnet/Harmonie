<?php

namespace App\Service;

use App\Form\Custom\ZoneSelectType;
use DOMDocument;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Twig\Environment;

class ShortcodeRenderer
{
    private $twig;
    private $slugger;
    private $formFactory;

    public function __construct(SluggerInterface $slugger, Environment $twig, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
        $this->slugger = $slugger;
        $this->twig = $twig;
    }

    public function render($content, $noSommaire = false)
    {
        // https://stackoverflow.com/questions/15735258/parse-wordpress-like-shortcode
        function read_attr($attr)
        {
            $atList = [];

            if (
                preg_match_all(
                    '/(\w+)="([^"]*|\'[^\']*\'|[^"\'>]*)"/i',
                    $attr,
                    $m
                )
            ) {
                for ($i = 0; $i < count($m[0]); $i++) {
                    $atList[$m[1][$i]] = $m[2][$i];
                }
            }
            return $atList;
        }

        function makeLabel($text)
        {
            $text = html_entity_decode($text);
            $text = preg_replace('/(\d[\s\-\,\d]*€)/', '<b>$1</b>', $text, 1000);
            $text = str_replace('#', "\n", $text);
            $text = nl2br($text);
            $parts = explode(' / ', $text);
            $text = $parts[0];
            if (sizeof($parts) > 1) {
                $text .= '<span class="caps bold">' . $parts[1] . '</span>';
            }
            return $text;
        }

        if (!$noSommaire) {
            $content = $this->addIdTo($content); // pour le sommaire TODO make it only if sommaire is activated ? NOTE this applies to full content whereas the shortcodes are just a replacement
        }

        $shortcodes = [
            'sommaire' => [$this, 'parseSommaire'],
            'localiser' => [$this, 'showLocaliser'],
            'formulaire' => [$this, 'showCTA'],
        ];

        if ($noSommaire) unset($shortcodes['sommaire']);

        $dat = [];
        $keys = array_keys($shortcodes);
        preg_match_all(
            '/\[(' . implode('|', $keys) . ')(.*)\]/',
            $content,
            $dat
        );
        if (count($dat) > 0 && $dat[0] != [] && isset($dat[2])) {
            // $dat[1] => shortcode name // $dat[2] => raw shortcode parameters
            $res = [];
            foreach ($dat[0] as $i => $string) {
                $shortcode = $dat[1][$i];
                $params = read_attr(html_entity_decode($dat[2][$i])); // CKEditor encodes the content, so we have to decode it first
                if (!empty($params['label'])) $params['label'] = makeLabel($params['label']);

                $res[$string] = call_user_func(
                    $shortcodes[$shortcode],
                    $content,
                    $params
                );
            }
            $content = str_replace(
                array_keys($res),
                array_values($res),
                $content
            );
        }

        return $content;
    }

    private function addIdTo($content)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML('<root>' . $content . '</root>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $elements = $dom->getElementsByTagName('h2');
        foreach ($elements as $element) {
            $element->setAttribute('id', $this->slugger->slug($element->nodeValue));
        }

        return preg_replace('/(^<root>|<\/root>$)/', '', $dom->saveHTML($dom->documentElement));
    }

    public function parseSommaire($content)
    {
        function boldTitle($text)
        {
            $split = explode(' | ', $text, 2);
            if (sizeof($split) > 1) {
                return '<b>' . $split[0] . ' | </b>' . $split[1];
            }
            return $text;
        }

        $dom = new DOMDocument();
        @$dom->loadHTML('<root>' . $content . '</root>');

        $sommaire = [];
        $headers = $dom->getElementsByTagName('h2');
        foreach ($headers as $header) {
            $id = $header->getAttribute('id');
            $text = boldTitle(utf8_decode($header->nodeValue));
            if (!empty($id)) {
                $sommaire[] = '<a href="#' . $id . '">' . $text . '</a>';
            }
        }

        if (!empty($sommaire)) {
            return '<div class="sommaire"><h3>SOMMAIRE</h3>' .
                implode('', $sommaire) .
                '</div>';
        } else {
            return '';
        }
    }

    public function showLocaliser($content, $params)
    {
        $form = $this->formFactory->create(ZoneSelectType::class, null, ['route' => '_zone_ajax_list_code']);
        return $this->renderTwigBlock('lien_localiser', ['form' => $form->createView()]);
    }

    public function showCTA($content, $params)
    {
        switch (@$params['type']) {
            case 'contact':
                return '<a href="javascript:;" data-qcd="'.base64_encode('/contact/').'" class="btn primary yellow grow">Contactez-nous</a>';
            case 'subvention':
                return '<a href="javascript:;" data-qcd="'.base64_encode('/contact/').'" class="btn primary yellow grow">Demandez une subvention</a>';
            case 'devis':
            default:
                return '<a href="javascript:;" data-qcd="'.base64_encode('/formulaire/').'" class="btn primary yellow grow">Demandez un devis gratuit</a>';
        }
    }

    private function renderTwigBlock($block, $params = [])
    {
        $template = $this->twig->load(
            'pages/_modules/liens.html.twig'
        );

        if ($template->hasBlock($block)) {
            return $template->renderBlock(
                $block,
                $this->twig->mergeGlobals($params)
            );
        } else {
            return "<!-- bloc $block non trouvé ! -->";
        }
    }
}
