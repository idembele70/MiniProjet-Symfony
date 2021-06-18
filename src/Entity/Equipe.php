<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipeRepository::class)
 */
class Equipe
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
    private $nomEquipe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEntraineur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomEntraineur;

    /**
     * @ORM\OneToMany(targetEntity=Joueur::class, mappedBy="equipe")
     */
    private $idJoueur;

    public function __construct()
    {
        $this->idJoueur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe(string $nomEquipe): self
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    public function getNomEntraineur(): ?string
    {
        return $this->nomEntraineur;
    }

    public function setNomEntraineur(string $nomEntraineur): self
    {
        $this->nomEntraineur = $nomEntraineur;

        return $this;
    }

    public function getPrenomEntraineur(): ?string
    {
        return $this->prenomEntraineur;
    }

    public function setPrenomEntraineur(string $prenomEntraineur): self
    {
        $this->prenomEntraineur = $prenomEntraineur;

        return $this;
    }

    /**
     * @return Collection|Joueur[]
     */
    public function getIdJoueur(): Collection
    {
        return $this->idJoueur;
    }

    public function addIdJoueur(Joueur $idJoueur): self
    {
        if (!$this->idJoueur->contains($idJoueur)) {
            $this->idJoueur[] = $idJoueur;
            $idJoueur->setEquipe($this);
        }

        return $this;
    }

    public function removeIdJoueur(Joueur $idJoueur): self
    {
        if ($this->idJoueur->removeElement($idJoueur)) {
            // set the owning side to null (unless already changed)
            if ($idJoueur->getEquipe() === $this) {
                $idJoueur->setEquipe(null);
            }
        }

        return $this;
    }


}
