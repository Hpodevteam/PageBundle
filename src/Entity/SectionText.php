<?php

namespace Hippocampe\Bundle\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionTextRepository")
 */
class SectionText extends Section
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
