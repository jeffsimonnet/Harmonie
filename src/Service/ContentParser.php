<?php

namespace App\Service;

use DOMDocument;
use Symfony\Component\String\Slugger\SluggerInterface;

class ContentParser
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function render($content)
    {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        @$dom->loadHTML('<root>' . $content .'</root>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $result = [];
        $currentTitle = null;
        $currentContent = null;
        // NOTE nodes before the first H2 will be ignored!
        foreach ($dom->documentElement->childNodes as $node) {
            if (strtolower($node->nodeName) == 'h2') {
                if (!is_null($currentTitle) && !is_null($currentContent)) {
                    $this->addEntry($result, $currentTitle, $currentContent);
                }
                $currentTitle = $node->nodeValue;
                $currentContent = new DOMDocument();
            } else if (!is_null($currentContent)) {
                $currentContent->appendChild($currentContent->importNode($node->cloneNode(true), true));
            }
        }
        if (!is_null($currentTitle) && !is_null($currentContent)) {
            $this->addEntry($result, $currentTitle, $currentContent);
        }

        return $result;
    }

    private function addEntry(&$result, $currentTitle, $currentContent)
    {
        $result[''.$this->slugger->slug($currentTitle)] = [ // We assume the same question won't be asked twice
            "title" => $currentTitle,
            "content" => trim($currentContent->saveHTML())
        ];
    }
}
