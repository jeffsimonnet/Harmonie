<?php

namespace App\Form;

use App\Document\Zone;
use Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parent', DocumentType::class, [
                'label' => 'Zone',
                'class' => Zone::class,
                'choice_label' => 'fullName',
                'choice_value' => 'id',
                'query_builder' => function(DocumentRepository $dr) {
                    return $dr->createQueryBuilder('z')
                        ->field('level')->equals(1)
                        ->sort('code', 1);
                },
                'placeholder' => 'Aucune',
                'empty_data' => null,
            ])
            ->add('nom')
            ->add('code')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Zone::class,
        ]);
    }
}
