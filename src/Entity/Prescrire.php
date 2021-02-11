<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prescrire
 *
 * @ORM\Table(name="prescrire", indexes={@ORM\Index(name="dos_code", columns={"dos_code"}), @ORM\Index(name="tin_code", columns={"tin_code"})})
 * @ORM\Entity
 */
class Prescrire
{
    /**
     * @var int
     *
     * @ORM\Column(name="med_depotlegal", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $medDepotlegal;

    /**
     * @var int
     *
     * @ORM\Column(name="tin_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tinCode;

    /**
     * @var int
     *
     * @ORM\Column(name="dos_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dosCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_posologie", type="string", length=40, nullable=false)
     */
    private $prePosologie;

    public function getMedDepotlegal(): ?int
    {
        return $this->medDepotlegal;
    }

    public function getTinCode(): ?int
    {
        return $this->tinCode;
    }

    public function getDosCode(): ?int
    {
        return $this->dosCode;
    }

    public function getPrePosologie(): ?string
    {
        return $this->prePosologie;
    }

    public function setPrePosologie(string $prePosologie): self
    {
        $this->prePosologie = $prePosologie;

        return $this;
    }


}
