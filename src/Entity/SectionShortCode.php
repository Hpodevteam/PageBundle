<?php

namespace Hippocampe\Bundle\PageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Hippocampe\Bundle\PageBundle\Repository\SectionShortCodeRepository")
 */
class SectionShortCode extends Section
{
    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private ?string $shortCode;

    public function getShortCode(): ?string
    {
        return $this->shortCode;
    }

    public function setShortCode(?string $shortCode): self
    {
        $this->shortCode = $shortCode;

        return $this;
    }
}
