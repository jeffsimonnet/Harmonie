<?php

namespace App\Form;

use App\Form\Custom\CiviliteType;
use App\Form\Custom\ReCaptchaSubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('recaptcha', ReCaptchaSubmitType::class)
            ->add('civilite', CiviliteType::class, ['label' => 'Civilité'])
            ->add('nom', null, ['label' => 'Nom'])
            ->add('prenom', null, ['label' => 'Prénom'])
            ->add('adresse', null, ['label' => 'Adresse'])
            ->add('code_postal', null, ['label' => 'Code postal'])
            ->add('ville', null, ['label' => 'Ville'])
            ->add('telephone', null, ['label' => 'Téléphone', 'attr' => ['pattern' => "^\\+?\\d([-| ]?\\d){9,}.*"]])
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add('nb_logements', null, ['label' => 'Nombre de logements dans la copropriété', 'required' => false])
            ->add('commentaire', TextareaType::class, ['label' => 'Votre message', 'required' => false, 'attr' => ['placeholder' => 'Écrivez ici ...']])
            ->add('accept_conditions', CheckboxType::class, ['label' => false]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([]);
    }

}
