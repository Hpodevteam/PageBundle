<?php

namespace Hippocampe\Bundle\PageBundle\Form\Admin\Type\Table;

use Hippocampe\Bundle\PageBundle\Entity\SectionTable;
use Hippocampe\Bundle\PageBundle\Entity\Table\Row;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class RowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', HiddenType::class, [
                'required' => false,
                'attr' => ['class' => 'position'],
            ])
            ->add('isBold', CheckboxType::class, [
                'label' => 'Ligne en gras'
            ])
            ->add('rowValues', TextType::class, [
                'label' => 'Valeurs',
                'help' => 'Valeurs espacées d\'un point virgule. ex : 1;2;3;4'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Row::class
        ]);
    }
}