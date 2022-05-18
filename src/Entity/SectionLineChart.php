<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Hippocampe\Bundle\PageBundle\Entity\Chart\LineChartRow;
use Hippocampe\Bundle\PageBundle\Entity\Table\Row;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionLineChartRepository")
 */
class SectionLineChart extends Section
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $labels;

    /**
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\ManyToMany(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Chart\LineChartRow", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinTable(name="section_line_chart_row",
     *      joinColumns={@ORM\JoinColumn(name="section_line_chart_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="line_chart_row_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $lineChartRows;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $legend;

    public function __construct()
    {
        parent::__construct();

        $this->lineChartRows = new ArrayCollection();
    }

    public function setLabels(?string $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    public function getLabels(): ?string
    {
        return $this->labels;
    }

    /**
     * @return ArrayCollection
     */
    public function getLineChartRows(): PersistentCollection
    {
        return $this->lineChartRows;
    }

    /**
     * @param LineChartRow $lineChartRow
     *
     * @return $this
     */
    public function addLineChartRow(LineChartRow $lineChartRow): self
    {
        if (!$this->lineChartRows->contains($lineChartRow)) {
            $this->lineChartRows[] = $lineChartRow;
        }

        return $this;
    }

    /**
     * @param LineChartRow $lineChartRow
     *
     * @return $this
     */
    public function removeLineChartRow(LineChartRow $lineChartRow): self
    {
        $this->lineChartRows->removeElement($lineChartRow);

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
