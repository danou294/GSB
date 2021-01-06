<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeIndividu
 *
 * @ORM\Table(name="type_individu")
 * @ORM\Entity
 */
class TypeIndividu
{
    /**
     * @var string
     *
     * @ORM\Column(name="tin_code", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tinCode;

    /**
     * @var string
     *
     * @ORM\Column(name="tin_libelle", type="string", length=50, nullable=false)
     */
    private $tinLibelle;

    public function getTinCode(): ?string
    {
        return $this->tinCode;
    }

    public function getTinLibelle(): ?string
    {
        return $this->tinLibelle;
    }

    public function setTinLibelle(string $tinLibelle): self
    {
        $this->tinLibelle = $tinLibelle;

        return $this;
    }


}
