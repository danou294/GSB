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
     * @var int
     *
     * @ORM\Column(name="med_perturbateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $medPerturbateur;

    /**
     * @var int
     *
     * @ORM\Column(name="med_med_perturbe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $medMedPerturbe;

    public function getMedPerturbateur(): ?int
    {
        return $this->medPerturbateur;
    }

    public function getMedMedPerturbe(): ?int
    {
        return $this->medMedPerturbe;
    }


}
