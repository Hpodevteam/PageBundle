<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Hippocampe\Bundle\PageBundle\Entity\SectionBarChart;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart\BarChartRowType;

class SectionBarChartCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionBarChart::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            TextField::new('labels', 'Labels'),
            CollectionField::new('barChartRows', 'Entrées')
                ->allowAdd()
                ->allowDelete()
                ->setEntryIsComplex(true)
                ->setEntryType(BarChartRowType::class),
            TextEditorField::new('legend', 'Légende')
        ]);
    }
}