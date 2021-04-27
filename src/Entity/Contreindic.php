<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contreindic
 *
 * @ORM\Table(name="contreindic")
 * @ORM\Entity
 */
class Contreindic
{
    /**
     * @var int
     *
     * @ORM\Column(name="idList", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlist;

    /**
     * @var int
     *
     * @ORM\Column(name="idContreIndic", type="integer", nullable=false)
     */
    private $idcontreindic;

    public function getIdlist(): ?int
    {
        return $this->idlist;
    }

    public function getIdcontreindic(): ?int
    {
        return $this->idcontreindic;
    }

    public function setIdcontreindic(int $idcontreindic): self
    {
        $this->idcontreindic = $idcontreindic;

        return $this;
    }


}
