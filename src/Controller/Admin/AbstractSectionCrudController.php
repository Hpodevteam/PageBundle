<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Hippocampe\Bundle\PageBundle\Entity\Section;
use Hippocampe\Bundle\PageBundle\Enum\SectionStyleTypeEnum;
use Hippocampe\Bundle\PageBundle\Enum\SectionTitleTagEnum;
use Hippocampe\Bundle\PageBundle\Enum\SectionTitleTypeEnum;
use Symfony\Component\HttpFoundation\RedirectResponse;

abstract class AbstractSectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Section::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->overrideTemplates([
                'crud/edit' => '@Page/admin/section/edit.html.twig',
            ])
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('Configuration'),
            IdField::new('id', 'ID')->hideOnForm(),
            TextField::new('title', 'Titre'),
            BooleanField::new('sticky', 'Sticky'),
            ChoiceField::new('titleTag', 'Type de titre (balise html)')
                ->setChoices(SectionTitleTagEnum::getChoices()),
            ChoiceField::new('titleType', 'Taille du titre')
                ->setChoices(SectionTitleTypeEnum::getChoices()),
            ChoiceField::new('styleType', 'Gestion des marges')
                ->setChoices(SectionStyleTypeEnum::getChoices()),
            TextField::new('backgroundColor', 'Couleur de fond'),

            FormField::addPanel('Administration'),
            BooleanField::new('enabled', 'Activé'),

            FormField::addPanel('Contenu'),
            TextField::new('chapo', 'Chapo')
        ];
    }

    public function getRedirectResponseAfterSave(AdminContext $context, string $action): RedirectResponse
    {
        $referrer = [
            'id' => intval($context->getRequest()->get('referrerId')),
            'name' => $context->getRequest()->get('referrerName')
        ];


        $url = $this->get(AdminUrlGenerator::class)
            ->setController('\\App\\Controller\\Admin\\' . $referrer['name'] . 'CrudController')
            ->setAction(Action::EDIT)
            ->setEntityId($referrer['id']);

        return $this->redirect($url);

    }
}