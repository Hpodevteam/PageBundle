<?php

namespace Hippocampe\Bundle\PageBundle\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Hippocampe\Bundle\PageBundle\Entity\Section;
use Doctrine\ORM\Mapping as ORM;

trait SectionWidgetTab
{
    /**
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\ManyToMany(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Section", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinTable(name="section_widget_tab",
     *      joinColumns={@ORM\JoinColumn(name="entity_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="section_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $sections;

    public function __construct()
    {
        $this->sections = new ArrayCollection();
    }

    /**
     * @return Collection|null
     */
    public function getSections(): ?Collection
    {
        if (!$this->sections) {
            return null;
        }

        return $this->sections->filter(function (Section $section) {
            return $section->getEnabled();
        });
    }

    /**
     * @param Section $section
     *
     * @return SectionWidgetTab
     */
    public function addSection(Section $section): self
    {
        if (!$this->sections) {
            return $this;
        }

        if (!$this->sections->contains($section)) {
            $this->sections[] = $section;
        }

        return $this;
    }

    /**
     * @param Section $section
     *
     * @return SectionWidgetTab
     */
    public function removeSection(Section $section): self
    {
        $this->sections->removeElement($section);

        return $this;
    }

    /**
     * @return SectionWidgetTab
     */
    public function removeAllSections(): self
    {
        foreach($this->sections as $entity) {
            $this->removeSection($entity);
        }

        return $this;
    }

    public function getClassName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}