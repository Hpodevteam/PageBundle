<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
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
            TextEditorField::new('content', 'Contenu')
                ->setFormType(CKEditorType::class)
                ->setColumns(12)
        ]);
    }
}