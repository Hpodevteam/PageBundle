<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\HiddenField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Hippocampe\Bundle\PageBundle\Admin\Field\HpoImageField;
use Hippocampe\Bundle\PageBundle\Entity\SectionTextImage;

class SectionTextImageCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionTextImage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            BooleanField::new('imageToLeft', 'Image à gauche'),
            BooleanField::new('floatMode', 'Mode "float"')
                ->setHelp('Si cette case est cochée, un fois le texte plus long que l\'image, ce dernier passera en dessous.'),
            TextEditorField::new('content', 'Contenu')
                ->setColumns(6)
                ->setFormType(CKEditorType::class),
            HiddenField::new('division', 'Division')->setColumns(6),
            HpoImageField::new('image', 'Image')->setColumns(6)
        ]);
    }
}