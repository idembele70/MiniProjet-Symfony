<?php

namespace App\Entity;

use App\Repository\EntraineurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntraineurRepository::class)
 */
class Entraineur
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
    private $nomEntraineur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomEntraineur;

    /**
     * @ORM\OneToOne(targetEntity=Equipe::class, inversedBy="entraineur", cascade={"persist", "remove"})
     */
    private $idEquipe;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdEquipe(): ?Equipe
    {
        return $this->idEquipe;
    }

    public function setIdEquipe(?Equipe $idEquipe): self
    {
        $this->idEquipe = $idEquipe;

        return $this;
    }
}
