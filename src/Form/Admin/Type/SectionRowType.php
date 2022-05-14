<?php

namespace Hippocampe\Bundle\PageBundle\Form\Admin\Type;

use Hippocampe\BUndle\PageBundle\Entity\Section;
use Hippocampe\Bundle\PageBundle\Enum\SectionTypeEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class SectionRowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', HiddenType::class, [
                'required' => false,
                'attr' => ['class' => 'position'],
            ])
            ->add('title', TextType::class, [
                'required' => true,
                'attr' => ['class' => 'title'],
                'constraints' => new NotBlank(),
            ])
            ->add('sticky', CheckboxType::class, [
                'required' => false,
                'attr' => ['class' => 'sticky'],
                'label' => false,
            ])
            ->add('className', ChoiceType::class, [
                'choices' => array_flip(SectionTypeEnum::getTypeNames()),
                'label' => 'Type',
                'required' => true,
                'attr' => ['class' => 'className'],
                'disabled' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Section::class,
            'empty_data' => function (FormInterface $form) {
                if ($form->get('className')->getData()) {
                    $class = '\\Hippocampe\\Bundle\\PageBundle\\Entity\\' . $form->get('className')->getData();

                    return new $class;
                }

                return null;
            },
        ));
    }
}