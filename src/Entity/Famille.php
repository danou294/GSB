<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille")
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var string
     *
     * @ORM\Column(name="fam_code", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $famCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fam_libelle", type="string", length=80, nullable=false)
     */
    private $famLibelle;

    public function getFamCode(): ?string
    {
        return $this->famCode;
    }

    public function getFamLibelle(): ?string
    {
        return $this->famLibelle;
    }

    public function setFamLibelle(string $famLibelle): self
    {
        $this->famLibelle = $famLibelle;

        return $this;
    }


}
