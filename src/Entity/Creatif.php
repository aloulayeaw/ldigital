<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreatifRepository")
 */
class Creatif
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Crea", cascade={"persist", "remove"})
     */
    private $crea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getCrea(): ?Crea
    {
        return $this->crea;
    }

    public function setCrea($crea): void
    {
        $this->crea = $crea;
    }
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user): void
    {
        $this->user = $user;
    }

}
