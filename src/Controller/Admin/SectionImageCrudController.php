<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Hippocampe\Bundle\PageBundle\Admin\Field\HpoImageField;
use Hippocampe\Bundle\PageBundle\Entity\SectionImage;

class SectionImageCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionImage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            BooleanField::new('parallax', 'Parallax'),
            HpoImageField::new('image', 'Image')->setColumns(6),
            TextEditorField::new('legend', 'Légende')->setColumns(6)
        ]);
    }
}