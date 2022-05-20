<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use App\Entity\Page;
use App\Entity\Tab;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="integer")
 * @ORM\DiscriminatorMap({
 *     1 = "SectionText",
 *     2 = "SectionText2Col",
 *     3 = "SectionShortCode",
 *     4 = "SectionTable",
 *     5 = "SectionImage",
 *     6 = "SectionTextImage",
 *     7 = "SectionPieChart",
 *     8 = "SectionBarChart",
 *     9 = "SectionLineChart"
 * })
 */
abstract class Section
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $styleType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $titleTag;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $titleType;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $backgroundColor;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $chapo;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sticky;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enabled;

    public function __construct()
    {
        $this->enabled = true;
    }


    public function __toString(): string
    {
        return $this->title;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitleTag(): ?string
    {
        return $this->titleTag;
    }

    public function setTitleTag(?string $titleTag): self
    {
        $this->titleTag = $titleTag;

        return $this;
    }

    public function getTitleType(): ?string
    {
        return $this->titleType;
    }

    public function setTitleType(?string $titleType): self
    {
        $this->titleType = $titleType;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function getChapo(): ?string
    {
        return $this->chapo;
    }

    public function setChapo(?string $chapo): self
    {
        $this->chapo = $chapo;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setPosition(?int $position)
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function getClassName()
    {
        try {
            return (new \ReflectionClass($this))->getShortName();
        } catch (\ReflectionException $e) {
            return null;
        }
    }

    public function getStyleType(): ?string
    {
        return $this->styleType;
    }

    public function setStyleType(?string $styleType): self
    {
        $this->styleType = $styleType;

        return $this;
    }

    public function getSticky(): ?bool
    {
        return $this->sticky;
    }

    public function setSticky(bool $sticky): self
    {
        $this->sticky = $sticky;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
