<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Hippocampe\Bundle\PageBundle\Entity\SectionBarChartY;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart\BarChartY;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\Chart\BarChartYRowType;

class SectionBarChartYCrudController extends AbstractSectionCrudController
{
    public static function getEntityFqcn(): string
    {
        return SectionBarChartY::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            TextField::new('label', 'Label'),
            CollectionField::new('barChartRows', 'Entrées')
                ->allowAdd()
                ->allowDelete()
                ->setEntryIsComplex(true)
                ->setEntryType(BarChartYRowType::class),
            TextEditorField::new('legend', 'Légende')
        ]);
    }
}