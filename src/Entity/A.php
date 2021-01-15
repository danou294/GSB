<?php

namespace App\Entity;

use App\Repository\ARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ARepository::class)
 */
class A
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @qd
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
