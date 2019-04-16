<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=8)
     */
    private $breedtegraad;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=8)
     */
    private $lengtegraad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBreedtegraad()
    {
        return $this->breedtegraad;
    }

    public function setBreedtegraad($breedtegraad): self
    {
        $this->breedtegraad = $breedtegraad;

        return $this;
    }

    public function getLengtegraad()
    {
        return $this->lengtegraad;
    }

    public function setLengtegraad($lengtegraad): self
    {
        $this->lengtegraad = $lengtegraad;

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
}
