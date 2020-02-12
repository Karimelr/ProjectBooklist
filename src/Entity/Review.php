<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Boek", inversedBy="reviews")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bookID;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $Beschrijving;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Naam;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookID(): ?Boek
    {
        return $this->bookID;
    }

    public function setBookID(?Boek $bookID): self
    {
        $this->bookID = $bookID;

        return $this;
    }

    public function getBeschrijving(): ?string
    {
        return $this->Beschrijving;
    }

    public function setBeschrijving(string $Beschrijving): self
    {
        $this->Beschrijving = $Beschrijving;

        return $this;
    }

    public function getNaam(): ?string
    {
        return $this->Naam;
    }

    public function setNaam(string $Naam): self
    {
        $this->Naam = $Naam;

        return $this;
    }
}
