<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dosage
 *
 * @ORM\Table(name="dosage")
 * @ORM\Entity
 */
class Dosage
{
    /**
     * @var string
     *
     * @ORM\Column(name="dos_code", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dosCode;

    /**
     * @var string
     *
     * @ORM\Column(name="dos_quantite", type="string", length=10, nullable=false)
     */
    private $dosQuantite;

    /**
     * @var string
     *
     * @ORM\Column(name="dos_unite", type="string", length=10, nullable=false)
     */
    private $dosUnite;

    public function getDosCode(): ?string
    {
        return $this->dosCode;
    }

    public function getDosQuantite(): ?string
    {
        return $this->dosQuantite;
    }

    public function setDosQuantite(string $dosQuantite): self
    {
        $this->dosQuantite = $dosQuantite;

        return $this;
    }

    public function getDosUnite(): ?string
    {
        return $this->dosUnite;
    }

    public function setDosUnite(string $dosUnite): self
    {
        $this->dosUnite = $dosUnite;

        return $this;
    }


}
