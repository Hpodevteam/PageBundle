<?php

namespace Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart;

use Hippocampe\Bundle\PageBundle\Entity\Chart\PieChartRow;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PieChartRowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', HiddenType::class, [
                'required' => false,
                'attr' => ['class' => 'position'],
            ])
            ->add('label', TextType::class, [
                'label' => 'Label'
            ])
            ->add('data', NumberType::class, [
                'label' => 'Donnée',
            ])
            ->add('color', TextType::class, [
                'required' => false,
                'label' => 'Couleur'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PieChartRow::class
        ]);
    }
}