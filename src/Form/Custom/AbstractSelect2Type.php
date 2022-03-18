<?php

namespace App\Form\Custom;

use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;

abstract class AbstractSelect2Type extends AbstractType implements DataMapperInterface
{
    protected $em;
    protected $options;

    public function __construct(DocumentManager $em)
    {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // TODO would be better to be made with a data transformer?
        // TODO could be better without a child field...
        $this->options = $options;
        $builder
            ->add('select', null, [
                'label' => false,
                'block_prefix' => 'select2_select',
            ])
            ->setDataMapper($this);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['route'] = $options['route'];
    }

    public function mapDataToForms($viewData, iterable $forms): void
    {
        // there is no data yet, so nothing to prepopulate
        if (null === $viewData) {
            return;
        }

        // invalid data type
        $class = $this->options['class'];
        if (!is_a($viewData, $class)) {
            throw new UnexpectedTypeException($viewData, $class);
        }

        $forms = iterator_to_array($forms);

        // initialize form field values
        $propertyAccessor = PropertyAccess::createPropertyAccessor();
        $forms['select']->setData([
            $propertyAccessor->getValue($viewData, $this->options['choice_value']) => $propertyAccessor->getValue($viewData, $this->options['choice_label']),
        ]);
    }

    public function mapFormsToData(iterable $forms, &$viewData): void
    {
        $forms = iterator_to_array($forms);

        // as data is passed by reference, overriding it will change it in
        // the form object as well
        // beware of type inconsistency, see caution below
        $id = $forms['select']->getData();

        if ($id != null) {
            $viewData = $this->em->getRepository($this->options['class'])->find($id);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'route' => '',
        ]);
    }
}
