<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Hippocampe\Bundle\PageBundle\Entity\Chart\PieChartRow;
use Hippocampe\Bundle\PageBundle\Entity\Table\Row;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionPieChartRepository")
 */
class SectionPieChart extends Section
{
    /**
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\ManyToMany(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Chart\PieChartRow", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinTable(name="section_pie_chart_row",
     *      joinColumns={@ORM\JoinColumn(name="section_pie_chart_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="pie_chart_row_id", referencedColumnName="id", unique=true, onDelete="CASCADE")}
     *      )
     */
    private $pieChartRows;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $legend;

    public function __construct()
    {
        parent::__construct();

        $this->pieChartRows = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getPieChartRows(): PersistentCollection
    {
        return $this->pieChartRows;
    }

    /**
     * @param PieChartRow $pieChartRow
     *
     * @return $this
     */
    public function addPieChartRow(PieChartRow $pieChartRow): self
    {
        if (!$this->pieChartRows->contains($pieChartRow)) {
            $this->pieChartRows[] = $pieChartRow;
        }

        return $this;
    }

    /**
     * @param PieChartRow $pieChartRow
     *
     * @return $this
     */
    public function removePieChartRow(PieChartRow $pieChartRow): self
    {
        $this->pieChartRows->removeElement($pieChartRow);

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
