# Page-bundle

## Installation
```bash 
composer require "hippocampe/page-bundle"
```

## Configuration

 Open your ```config/packages/page.yaml``` file and add :

```yaml
page:
    sections:
        spacer: 'your spacing class'
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
}
```

