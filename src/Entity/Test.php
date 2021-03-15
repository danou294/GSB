<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity
 */
class Test
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
     * @var string|null
     *
     * @ORM\Column(name="test1", type="string", length=255, nullable=true)
     */
    private $test1;

    /**
     * @var string
     *
     * @ORM\Column(name="test2", type="string", length=255, nullable=false)
     */
    private $test2;

    /**
     * @var string
     *
     * @ORM\Column(name="test3", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $test3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTest1(): ?string
    {
        return $this->test1;
    }

    public function setTest1(?string $test1): self
    {
        $this->test1 = $test1;

        return $this;
    }

    public function getTest2(): ?string
    {
        return $this->test2;
    }

    public function setTest2(string $test2): self
    {
        $this->test2 = $test2;

        return $this;
    }

    public function getTest3(): ?string
    {
        return $this->test3;
    }

    public function setTest3(string $test3): self
    {
        $this->test3 = $test3;

        return $this;
    }


}
