# Page-bundle

## Installation
```bash 
composer require "hpodevteam/page-bundle"
```

## Configuration

 Open your ```config/packages/page.yaml``` file and add :

```yaml
page:
    sections:
        spacer: 'your spacing class'
```

Open your ```config/packages/vich_uploader.yaml``` file and add :

```yaml
parameters:
  app.path.section_image: /uploads/section_image

vich_uploader:
  mappings:
      section_image:
          uri_prefix: '%app.path.section_image%'
          upload_destination: '%kernel.project_dir%/public/uploads/section_image'
          namer: Vich\UploaderBundle\Naming\OrignameNamer

```

## Usage

Add trait ```SectionWidget``` to the entity to be managed.

```php
<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Hippocampe\Bundle\PageBundle\Traits\SectionWidget;

/**
 * @ORM\Entity(repositoryClass=PageRepository::class)
 */
class Page
{
    use SectionWidget;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    //

    public function getId(): ?int
    {
        return $this->id;
    }

    //
}
```

Then in ```{YourEntity}CrudController.php``` file 

```php
<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Hippocampe\Bundle\PageBundle\Form\Admin\Type\SectionRowType;

class PageCrudController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Page::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // You can use your own templates here and extends @Page/admin/entity/{actions}.html.twig
            ->overrideTemplates([
                'crud/edit' => '@Page/admin/entity/edit.html.twig',
                'crud/new' => '@Page/admin/entity/new.html.twig'
            ])
            // This is mandatory
            ->setFormThemes(['@Page/admin/section/form_theme.html.twig'])
        ;
    }
    
    // Optionnal for tabs
    // This allow you to redirect to parent instead of getting redirected to Crud::INDEX page
    public function getRedirectResponseAfterSave(AdminContext $context, string $action): RedirectResponse
    {
        $submitButtonName = $context->getRequest()->request->all()['ea']['newForm']['btn'];

        if (Action::SAVE_AND_RETURN === $submitButtonName) {
            $url = $this->get(AdminUrlGenerator::class)
                ->setController('Entity\\To\\Redirect')
                ->setAction(Action::EDIT)
                ->setEntityId($yourEntityId);

            return $this->redirect($url);
        }

        return parent::getRedirectResponseAfterSave($context, $action);
    }
}
```

