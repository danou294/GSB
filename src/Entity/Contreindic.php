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
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idList", type="integer", nullable=false)
     */
    private $idlist;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleMed", type="string", length=255, nullable=false)
     */
    private $libellemed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdlist(): ?int
    {
        return $this->idlist;
    }

    public function setIdlist(int $idlist): self
    {
        $this->idlist = $idlist;

        return $this;
    }

    public function getLibellemed(): ?string
    {
        return $this->libellemed;
    }

    public function setLibellemed(string $libellemed): self
    {
        $this->libellemed = $libellemed;

        return $this;
    }


}
