<?php

namespace Hippocampe\Bundle\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Hippocampe\Bundle\PageBundle\Entity\Section;
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
            IdField::new('id', 'ID')->hideOnForm(),
            TextField::new('title', 'Titre'),
            BooleanField::new('sticky', 'Sticky'),
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