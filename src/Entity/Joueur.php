<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JoueurRepository::class)
 */
class Joueur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomJoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomJoueur;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroDeMaillot;

    /**
     * @ORM\ManyToOne(targetEntity=Equipe::class, inversedBy="idJoueur")
     */
    private $equipe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomJoueur(): ?string
    {
        return $this->nomJoueur;
    }

    public function setNomJoueur(string $nomJoueur): self
    {
        $this->nomJoueur = $nomJoueur;

        return $this;
    }

    public function getPrenomJoueur(): ?string
    {
        return $this->prenomJoueur;
    }

    public function setPrenomJoueur(string $prenomJoueur): self
    {
        $this->prenomJoueur = $prenomJoueur;

        return $this;
    }

    public function getNumeroDeMaillot(): ?int
    {
        return $this->numeroDeMaillot;
    }

    public function setNumeroDeMaillot(int $numeroDeMaillot): self
    {
        $this->numeroDeMaillot = $numeroDeMaillot;

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }
}
