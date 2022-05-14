<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionText2ColRepository")
 */
class SectionText2Col extends Section
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentCol1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentCol2;


    public function getContentCol1(): ?string
    {
        return $this->contentCol1;
    }

    public function setContentCol1(?string $content): self
    {
        $this->contentCol1 = $content;

        return $this;
    }

    public function getContentCol2(): ?string
    {
        return $this->contentCol2;
    }

    public function setContentCol2(?string $content): self
    {
        $this->contentCol2 = $content;

        return $this;
    }
}
