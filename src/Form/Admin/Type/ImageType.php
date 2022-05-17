<?php

namespace Hippocampe\Bundle\PageBundle\Form\Admin\Type;

use Hippocampe\Bundle\PageBundle\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageName', TextType::class, [
                'required' => false,
                'label' => 'Nom de l\'image',
                'help' => 'Ce champ sera utilisé pour remplir l\'attribut "alt" de l\'image'
            ])
            ->add('imageFile', VichImageType::class, [
                'required' => true,
                'label' => 'Image'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Image::class
        ]);
    }
}