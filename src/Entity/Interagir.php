<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interagir
 *
 * @ORM\Table(name="interagir")
 * @ORM\Entity
 */
class Interagir
{
    /**
     * @var string
     *
     * @ORM\Column(name="med_perturbateur", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $medPerturbateur;

    /**
     * @var string
     *
     * @ORM\Column(name="med_med_perturbe", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $medMedPerturbe;

    public function getMedPerturbateur(): ?string
    {
        return $this->medPerturbateur;
    }

    public function getMedMedPerturbe(): ?string
    {
        return $this->medMedPerturbe;
    }


}
