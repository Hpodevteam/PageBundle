<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use Hippocampe\Bundle\PageBundle\Entity\SectionShortCode;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SectionShortCodeCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionShortCode::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            TextField::new('shortCode', 'Short code'),
        ]);
    }
}