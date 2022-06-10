<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Hippocampe\Bundle\PageBundle\Entity\SectionText2Col;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SectionText2ColCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionText2Col::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            TextEditorField::new('contentCol1', 'Contenu de la colonne 1')->setFormType(CKEditorType::class),
            TextEditorField::new('contentCol2', 'Contenu de la colonne 2')->setFormType(CKEditorType::class)
        ]);
    }
}