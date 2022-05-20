<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Hippocampe\Bundle\PageBundle\Entity\Image;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionTextImageRepository")
 */
class SectionTextImage extends Section
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Hippocampe\Bundle\PageBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=4, options={"default" : "11"})
     */
    private $division = '11';

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $imageToLeft;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $floatMode;

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     *
     * @return $this
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDivision(): ?string
    {
        return $this->division;
    }

    /**
     * @param string $division
     *
     * @return $this
     */
    public function setDivision(string $division): self
    {
        $this->division = $division;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getImageToLeft(): ?bool
    {
        return $this->imageToLeft;
    }

    /**
     * @param bool|null $imageToLeft
     *
     * @return $this
     */
    public function setImageToLeft(?bool $imageToLeft): self
    {
        $this->imageToLeft = $imageToLeft;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFloatMode(): ?bool
    {
        return $this->floatMode;
    }

    /**
     * @param bool|null $floatMode
     *
     * @return $this
     */
    public function setFloatMode(?bool $floatMode): self
    {
        $this->floatMode = $floatMode;

        return $this;
    }
}
