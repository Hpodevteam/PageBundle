<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use Hippocampe\Bundle\PageBundle\Entity\SectionText;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SectionTextCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionText::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            TextField::new('chapo', 'Chapo'),
            TextEditorField::new('content', 'Contenu')
        ]);
    }
}