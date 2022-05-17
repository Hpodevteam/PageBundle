<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
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
            TextEditorField::new('content', 'Contenu')->setColumns(6),
            TextField::new('division', 'Division')->setColumns(6),
            HpoImageField::new('image', 'Image')->setColumns(6)
        ]);
    }
}