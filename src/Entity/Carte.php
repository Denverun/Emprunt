<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

//use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CarteRepository::class)
 */

/**
 * @ORM\Entity
 * @UniqueEntity("id")
 */

/**
 * @ORM\Entity
 * @UniqueEntity("nom")
 */

class Carte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $Vie;

    /**
     * @ORM\Column(type="float")
     */
    private $Attaque;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $Cout;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVie(): ?float
    {
        return $this->Vie;
    }

    public function setVie(float $Vie): self
    {
        $this->Vie = $Vie;

        return $this;
    }

    public function getAttaque(): ?float
    {
        return $this->Attaque;
    }

    public function setAttaque(float $Attaque): self
    {
        $this->Attaque = $Attaque;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $Nom): self
    {
        $this->nom = $Nom;

        return $this;
    }

    public function getCout(): ?float
    {
        return $this->Cout;
    }

    public function setCout(float $Cout): self
    {
        $this->Cout = $Cout;

        return $this;
    }
}
