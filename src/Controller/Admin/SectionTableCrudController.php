<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Hippocampe\Bundle\PageBundle\Entity\SectionTable;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Table\RowType;

class SectionTableCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionTable::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            CollectionField::new('rows', 'Lignes')
                ->allowAdd()
                ->allowDelete()
                ->setEntryIsComplex(true)
                ->setEntryType(RowType::class),
            TextEditorField::new('legend', 'Légende')
        ]);
    }
}