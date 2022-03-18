<?php

namespace App\Form;

use App\Document\Page;
use App\Document\Zone;
use App\Form\Custom\BlogCategoryType;
use App\Form\Custom\PageHeroType;
use App\Form\Custom\PageMetaType;
use App\Form\Custom\PageSlugType;
use App\Form\Custom\PageStatusType;
use App\Form\Custom\RealisationCategoryType;
use App\Form\Custom\SlideshowType;
use App\Form\Custom\StaticPortletsType;
use App\Form\Custom\TagsListeType;
use Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
use FM\ElfinderBundle\Form\Type\ElFinderType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',   HiddenType::class, ['data' => $options['type']])
            ->add('slug',   PageSlugType::class, ['required' => true, 'prefix' => $options['prefix']])
            ->add('status', PageStatusType::class)
            ->add('meta',   PageMetaType::class, ['label' => false, 'property_path' => 'content[meta]', 'required' => true])
            ->add('title',  null, ['label' => 'Titre / H1'])
        ;

        // change form according to type. All pages need a slug (editable ?), a title (editable ?), metas, status (?).
        switch ($options['type']) {
            case 'contenu':
                $builder
                    ->add('contenu', CKEditorType::class, [
                        'config' => [
                            'bodyClass' => 'content',
                        ],
                        'block_prefix' => 'with_shortcodes',
                        'property_path' => 'content[body]',
                    ])
                    ->add('hero', PageHeroType::class, [
                        'label' => false,
                        'property_path' => 'content[hero]',
                    ])
                ;
                break;
            case 'statique':
                $builder
                    ->add('methode', ChoiceType::class, [
                        'choices' => [
                            'Blog' => 'blogIndex',
                            'Faq' => 'faqIndex',
                            'Réalisations' => 'realisationsIndex',
                            'Témoignages' => 'temoignagesIndex',
                            'Vidéos' => 'videosIndex',
                            'Formulaire' => 'formulaire',
                        ],
                        'property_path' => 'content[methode]',
                    ])
                ;
                break;
            case 'template':
                $builder
                    ->add('template', null, [
                        'property_path' => 'content[template]',
                    ])
                    ->add('configuration', TagsListeType::class, [
                        'property_path' => 'content[configuration]',
                        'required' => false,
                    ])
                ;

                $config = @$builder->getData()->getContent()['configuration'];
                if (!empty($config)) {
                    $builder
                        ->add('portlets', StaticPortletsType::class, [
                            'property_path' => 'content[portlets]',
                            'config' => $config,
                        ])
                    ;
                }
                break;
            case 'blog':
                $builder
                    ->add('contenu', CKEditorType::class, [
                        'config' => [
                            'bodyClass' => 'content',
                        ],
                        'block_prefix' => 'with_shortcodes',
                        'property_path' => 'content[body]',
                    ])
                    ->add('image', ElFinderType::class, [
                        'instance' => 'form',
                        'enable' => true,
                        'required' => true,
                        'property_path' => 'content[image]',
                    ])
                    ->add('accroche', TextareaType::class, ['property_path' => 'content[accroche]'])
                    ->add('categorie', BlogCategoryType::class, ['property_path' => 'content[categorie]'])
                    ->add('date', DateType::class, ['widget' => 'single_text', 'property_path' => 'content[date]', 'input' => 'string'])
                    // ->add('tags', BlogTagsType::class)
                    // ->add('author', BlogAuthorType::class)
                    // TODO add recommend ?
                ;
                break;
            case 'faq':
                $builder
                    ->add('faq', CKEditorType::class, [
                        'config' => [
                            'bodyClass' => 'content',
                        ],
                        'block_prefix' => 'with_shortcodes',
                        'property_path' => 'content[faq]',
                    ])
                ;
                break;
            case 'realisation':
                $builder
                    ->add('contenu', CKEditorType::class, [
                        'config' => [
                            'bodyClass' => 'content',
                        ],
                        'block_prefix' => 'with_shortcodes',
                        'property_path' => 'content[body]',
                    ])
                    ->add('image', ElFinderType::class, [
                        'label' => 'Image à la une',
                        'instance' => 'form',
                        'enable' => true,
                        'required' => true,
                        'property_path' => 'content[image]',
                    ])
                    ->add('slideshow', SlideshowType::class,[
                        'instance' => 'form',
                        'enable' => true,
                        'required' => true,
                        'property_path' => 'content[slideshow]',
                    ])
                    ->add('categorie', RealisationCategoryType::class, ['property_path' => 'content[categorie]'])
                    ->add('zone', DocumentType::class, [
                        'label' => 'Zone',
                        'class' => Zone::class,
                        'choice_label' => 'fullName',
                        'choice_value' => 'id',
                        'query_builder' => function (DocumentRepository $dr) {
                            return $dr->createQueryBuilder('z')
                                ->field('level')->equals(2)
                                ->sort('code', 1);
                        },
                        'placeholder' => 'Aucune',
                        'empty_data' => null,
                        //'property_path' => 'content[zone]' // Can't be inside content[]. Maybe a serialization issue
                    ])
                    ->add('date', DateType::class, ['widget' => 'single_text', 'property_path' => 'content[date]', 'input' => 'string'])
                    ->add('featured', CheckboxType::class, ['label' => 'A la une', 'property_path' => 'content[featured]', 'required' => false])
                    ->add('featured_home', CheckboxType::class, ['label' => 'A la une (home)', 'property_path' => 'content[featured_home]', 'required' => false])
                ;

                $config = @$builder->getData()->getContent()['configuration'];
                if (!empty($config)) {
                    $builder
                        ->add('portlets', StaticPortletsType::class, [
                            'property_path' => 'content[portlets]',
                            'config' => $config,
                        ])
                    ;
                }
                break;
            case 'temoignage':
                $builder
                    ->add('date', DateType::class, ['widget' => 'single_text', 'property_path' => 'content[date]', 'input' => 'string'])
                    ->add('temoignage', CKEditorType::class, [
                        'config' => [
                            'bodyClass' => 'content',
                        ],
                        // 'block_prefix' => 'with_shortcodes',
                        'property_path' => 'content[temoignage]',
                    ])
                    ->add('image', ElFinderType::class, [
                        'instance' => 'form',
                        'enable' => true,
                        'required' => true,
                        'property_path' => 'content[image]',
                    ])
                ;
                break;
            case 'redirect':
                $builder
                    ->remove('meta')
                    ->remove('title')
                    ->add('target', null, ['property_path' => 'content[redirect]', 'attr' => ['pattern' => "^\/([^\s]+\/$)?$"]]);
                break;
            case 'home':
                $builder->remove('slug');
                // No added field
                break;
            default:
                throw new BadRequestException("Impossible de trouver ce type de page ! (" . $options['type'] . ")");
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
            'prefix' => '',
            'type' => null,
        ]);
    }
}
