<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Hippocampe\Bundle\PageBundle\Entity\Table\Row;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionTableRepository")
 */
class SectionTable extends Section
{
    /**
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\ManyToMany(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Table\Row", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinTable(name="section_table_row",
     *      joinColumns={@ORM\JoinColumn(name="section_table_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="row_id", referencedColumnName="id", unique=true, onDelete="CASCADE")}
     *      )
     */
    private $rows;

    public function __construct()
    {
        $this->rows = new ArrayCollection();
        $this->setEnabled(true);
    }

    /**
     * @return PersistentCollection
     */
    public function getRows(): PersistentCollection
    {
        return $this->rows;
    }

    /**
     * @param Row $row
     *
     * @return $this
     */
    public function addRow(Row $row): self
    {
        if (!$this->rows->contains($row)) {
            $this->rows[] = $row;
        }

        return $this;
    }

    public function removeRow(Row $row): self
    {
        $this->rows->removeElement($row);

        return $this;
    }
}
