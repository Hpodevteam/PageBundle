<?php

namespace Hippocampe\Bundle\PageBundle\Entity\Chart;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Hippocampe\Bundle\PageBundle\Entity\SectionBarChart;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\Chart\BarChartYRowRepository")
 */
class BarChartYRow
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Gedmo\SortableGroup
     * @ORM\ManyToOne(targetEntity="Hippocampe\Bundle\PageBundle\Entity\SectionBarChartY", inversedBy="barChartRows")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private ?SectionBarChart $sectionBarChart;

    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $position;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $label;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $data;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $color;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return SectionBarChartY|null
     */
    public function getSectionBarChart(): ?SectionBarChartY
    {
        return $this->sectionBarChart;
    }

    /**
     * @param SectionBarChartY|null $sectionBarChart
     *
     * @return $this
     */
    public function setSectionBarChart(?SectionBarChartY $sectionBarChart): self
    {
        $this->sectionBarChart = $sectionBarChart;

        return $this;
    }

    /**
     * @param int|null $position
     *
     * @return $this
     */
    public function setPosition(?int $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param string|null $label
     *
     * @return $this
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $data
     *
     * @return $this
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $color
     *
     * @return $this
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->label;
    }
}
