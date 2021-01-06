<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prescrire
 *
 * @ORM\Table(name="prescrire", indexes={@ORM\Index(name="dos_code", columns={"dos_code"}), @ORM\Index(name="med_depotlegal", columns={"med_depotlegal"}), @ORM\Index(name="tin_code", columns={"tin_code"})})
 * @ORM\Entity
 */
class Prescrire
{
    /**
     * @var string
     *
     * @ORM\Column(name="med_depotlegal", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $medDepotlegal;

    /**
     * @var string
     *
     * @ORM\Column(name="tin_code", type="string", length=5, nullable=false)
     */
    private $tinCode;

    /**
     * @var string
     *
     * @ORM\Column(name="dos_code", type="string", length=10, nullable=false)
     */
    private $dosCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_posologie", type="string", length=40, nullable=false)
     */
    private $prePosologie;

    public function getMedDepotlegal(): ?string
    {
        return $this->medDepotlegal;
    }

    public function getTinCode(): ?string
    {
        return $this->tinCode;
    }

    public function setTinCode(string $tinCode): self
    {
        $this->tinCode = $tinCode;

        return $this;
    }

    public function getDosCode(): ?string
    {
        return $this->dosCode;
    }

    public function setDosCode(string $dosCode): self
    {
        $this->dosCode = $dosCode;

        return $this;
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
