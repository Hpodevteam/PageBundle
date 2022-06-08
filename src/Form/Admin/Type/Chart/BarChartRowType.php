<?php

namespace Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart;

use Hippocampe\Bundle\PageBundle\Entity\Chart\BarChartRow;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BarChartRowType extends AbstractType
{
    private $colors;

    public function __construct($colors)
    {
        $this->colors = $colors;
    }

    protected function getColors(): array
    {
        $colors = [];

        foreach ($this->colors as $key => $value) {
            $colors[$value['name']] = $value['value'];
        }

        return $colors;
    }

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
            ->add('datas', ChoiceType::class, [
                'label' => 'Données',
                'multiple' => true,
                'attr' => [
                    'class' => 'select2 data-select'
                ]
            ])
            ->add('color', ChoiceType::class, [
                'required' => false,
                'label' => 'Couleur',
                'choices' => $this->getColors(),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BarChartRow::class
        ]);
    }
}