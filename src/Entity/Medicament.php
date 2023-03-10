<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament", indexes={@ORM\Index(name="fam_code", columns={"fam_code"})})
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var int
     *
     * @ORM\Column(name="medDepotlegal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $meddepotlegal;

    /**
     * @var string
     *
     * @ORM\Column(name="med_nomcommercial", type="string", length=25, nullable=false)
     */
    private $medNomcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="med_composition", type="string", length=255, nullable=false)
     */
    private $medComposition;

    /**
     * @var string
     *
     * @ORM\Column(name="med_effets", type="string", length=255, nullable=false)
     */
    private $medEffets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="med_contreindic", type="string", length=255, nullable=true)
     */
    private $medContreindic;

    /**
     * @var float
     *
     * @ORM\Column(name="med_prixechantillon", type="float", precision=10, scale=0, nullable=false)
     */
    private $medPrixechantillon;

    /**
     * @var int
     *
     * @ORM\Column(name="fam_code", type="integer", nullable=false)
     */
    private $famCode;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")

     */
    private $indice = 50;

    public function getMeddepotlegal(): ?int
    {
        return $this->meddepotlegal;
    }

    public function getMedNomcommercial(): ?string
    {
        return $this->medNomcommercial;
    }

    public function setMedNomcommercial(string $medNomcommercial): self
    {
        $this->medNomcommercial = $medNomcommercial;

        return $this;
    }

    public function getMedComposition(): ?string
    {
        return $this->medComposition;
    }

    public function setMedComposition(string $medComposition): self
    {
        $this->medComposition = $medComposition;

        return $this;
    }

    public function getMedEffets(): ?string
    {
        return $this->medEffets;
    }

    public function setMedEffets(string $medEffets): self
    {
        $this->medEffets = $medEffets;

        return $this;
    }

    public function getMedContreindic(): ?string
    {
        return $this->medContreindic;
    }

    public function setMedContreindic(?string $medContreindic): self
    {
        $this->medContreindic = $medContreindic;

        return $this;
    }

    public function getMedPrixechantillon(): ?float
    {
        return $this->medPrixechantillon;
    }

    public function setMedPrixechantillon(float $medPrixechantillon): self
    {
        $this->medPrixechantillon = $medPrixechantillon;

        return $this;
    }

    public function getFamCode(): ?int
    {
        return $this->famCode;
    }

    public function setFamCode(int $famCode): self
    {
        $this->famCode = $famCode;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIndice(): ?int
    {
        return $this->indice;
    }

    public function setIndice(int $indice): self
    {
        if ($indice==0)
        {
            $indice=$this->indice;
        }
        $this->indice = $indice;

        return $this;
    }


}
