<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Hippocampe\Bundle\PageBundle\Entity\Chart\BarChartRow;
use Hippocampe\Bundle\PageBundle\Entity\Chart\BarChartYRow;
use Hippocampe\Bundle\PageBundle\Entity\Table\Row;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionBarChartYRepository")
 */
class SectionBarChartY extends Section
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $label;

    /**
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\ManyToMany(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Chart\BarChartYRow", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinTable(name="section_bar_chart_y_row",
     *      joinColumns={@ORM\JoinColumn(name="section_bar_chart_y_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="bar_chart_y_row_id", referencedColumnName="id", unique=true, onDelete="CASCADE")}
     *      )
     */
    private $barChartRows;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $legend;

    public function __construct()
    {
        parent::__construct();

        $this->barChartRows = new ArrayCollection();
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @return ArrayCollection
     */
    public function getBarChartRows(): PersistentCollection
    {
        return $this->barChartRows;
    }

    /**
     * @param BarChartYRow $barChartRow
     *
     * @return $this
     */
    public function addBarChartRow(BarChartYRow $barChartRow): self
    {
        if (!$this->barChartRows->contains($barChartRow)) {
            $this->barChartRows[] = $barChartRow;
        }

        return $this;
    }

    /**
     * @param BarChartYRow $barChartRow
     *
     * @return $this
     */
    public function removeBarChartRow(BarChartYRow $barChartRow): self
    {
        $this->barChartRows->removeElement($barChartRow);

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegend(): ?string
    {
        return $this->legend;
    }

    /**
     * @param string|null $legend
     *
     * @return $this
     */
    public function setLegend(?string $legend): self
    {
        $this->legend = $legend;

        return $this;
    }
}
