<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Hippocampe\Bundle\PageBundle\Entity\SectionLineChart;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart\BarChartRowType;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart\LineChartRowType;

class SectionLineChartCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionLineChart::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            TextField::new('labels', 'Labels'),
            CollectionField::new('lineChartRows', 'Entrées')
                ->allowAdd()
                ->allowDelete()
                ->setEntryIsComplex(true)
                ->setEntryType(LineChartRowType::class),
            TextEditorField::new('legend', 'Légende')
        ]);
    }
}