<?php

namespace App\Entity;

use App\Repository\TractorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TractorRepository::class)
 */
class Tractor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $immatriculation;

    /**
     * @ORM\Column(type="integer")
     */
    private $dateAchat;

    /**
     * @ORM\Column(type="integer")
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $consommation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $puissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="tractors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $Valeur;

    /**
     * @ORM\Column(type="integer")
     */
    private $motorLoadCoefficient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getDateAchat(): ?int
    {
        return $this->dateAchat;
    }

    public function setDateAchat(int $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getConsommation(): ?string
    {
        return $this->consommation;
    }

    public function setConsommation(string $consommation): self
    {
        $this->consommation = $consommation;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->Valeur;
    }

    public function setValeur(int $Valeur): self
    {
        $this->Valeur = $Valeur;

        return $this;
    }

    public function getMotorLoadCoefficient(): ?int
    {
        return $this->motorLoadCoefficient;
    }

    public function setMotorLoadCoefficient(int $motorLoadCoefficient): self
    {
        $this->motorLoadCoefficient = $motorLoadCoefficient;

        return $this;
    }
}
