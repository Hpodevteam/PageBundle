<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Hippocampe\Bundle\PageBundle\Entity\SectionPieChart;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart\PieChartRowType;

class SectionPieChartCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionPieChart::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            CollectionField::new('pieChartRows', 'Entrées')
                ->allowAdd()
                ->allowDelete()
                ->setEntryIsComplex(true)
                ->setEntryType(PieChartRowType::class),
            TextEditorField::new('legend', 'Légende')
        ]);
    }
}