<?php

namespace Hippocampe\Bundle\PageBundle\Entity\Table;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Hippocampe\Bundle\PageBundle\Entity\SectionTable;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\Table\RowRepository")
 */
class Row
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Hippocampe\Bundle\PageBundle\Entity\SectionTable", inversedBy="rows")
     */
    private ?SectionTable $sectionTable;

    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $position;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $isBold;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $rowValues;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return SectionTable|null
     */
    public function getSectionTable(): ?SectionTable
    {
        return $this->sectionTable;
    }

    /**
     * @param SectionTable|null $sectionTable
     *
     * @return $this
     */
    public function setSectionTable(?SectionTable $sectionTable): self
    {
        $this->sectionTable = $sectionTable;

        return $this;
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

    public function setIsBold(?bool $isBold): self
    {
        $this->isBold = $isBold;

        return $this;
    }

    public function getIsBold(): ?bool
    {
        return $this->isBold;
    }

    public function setRowValues(?string $rowValues): self
    {
        $this->rowValues = $rowValues;

        return $this;
    }

    public function getRowValues(): ?string
    {
        return $this->rowValues;
    }

    public function __toString():string
    {
        return 'Ligne #' . ($this->position + 1);
    }
}
