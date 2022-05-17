<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Hippocampe\Bundle\PageBundle\Entity\Image;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionImageRepository")
 */
class SectionImage extends Section
{
    /**
     * @ORM\ManyToOne(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private ?Image $image;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $parallax;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $legend;

    /**
     * @return Image|null
     */
    public function getImage(): ?Image
    {
        return $this->image;
    }

    /**
     * @param Image|null $image
     *
     * @return $this
     */
    public function setImage(?Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getParallax(): ?bool
    {
        return $this->parallax;
    }

    /**
     * @param bool|null $parallax
     *
     * @return $this
     */
    public function setParallax(?bool $parallax): self
    {
        $this->parallax = $parallax;

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

