<?php

namespace Hippocampe\Bundle\PageBundle\Entity\Chart;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Hippocampe\Bundle\PageBundle\Entity\SectionPieChart;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\Chart\PieChartRowRepository")
 */
class PieChartRow
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Hippocampe\Bundle\PageBundle\Entity\SectionPieChart", inversedBy="rows")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private ?SectionPieChart $sectionPieChart;

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
     * @ORM\Column(type="float", nullable=true)
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
     * @return SectionPieChart|null
     */
    public function getSectionPieChart(): ?SectionPieChart
    {
        return $this->sectionPieChart;
    }

    /**
     * @param SectionPieChart|null $sectionPieChart
     *
     * @return $this
     */
    public function setSectionPieChart(?SectionPieChart $sectionPieChart): self
    {
        $this->sectionPieChart = $sectionPieChart;

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
