<?php

namespace App\Entity;

use App\Repository\BonLivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BonLivraisonRepository::class)
 */
class BonLivraison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $peremption;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumLot;

    /**
     * @ORM\Column(type="integer")
     */
    private $unite;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteCommandee;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteLivree;

    /**
     * @ORM\Column(type="float")
     */
    private $prixUnitaire;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numLivraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPeremption(): ?\DateTimeInterface
    {
        return $this->peremption;
    }

    public function setPeremption(\DateTimeInterface $peremption): self
    {
        $this->peremption = $peremption;

        return $this;
    }

    public function getNumLot(): ?string
    {
        return $this->NumLot;
    }

    public function setNumLot(string $NumLot): self
    {
        $this->NumLot = $NumLot;

        return $this;
    }

    public function getUnite(): ?int
    {
        return $this->unite;
    }

    public function setUnite(int $unite): self
    {
        $this->unite = $unite;

        return $this;
    }

    public function getQteCommandee(): ?int
    {
        return $this->qteCommandee;
    }

    public function setQteCommandee(int $qteCommandee): self
    {
        $this->qteCommandee = $qteCommandee;

        return $this;
    }

    public function getQteLivree(): ?int
    {
        return $this->qteLivree;
    }

    public function setQteLivree(int $qteLivree): self
    {
        $this->qteLivree = $qteLivree;

        return $this;
    }

    public function getPrixUnitaire(): ?float
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(float $prixUnitaire): self
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNumLivraison(): ?string
    {
        return $this->numLivraison;
    }

    public function setNumLivraison(string $numLivraison): self
    {
        $this->numLivraison = $numLivraison;

        return $this;
    }
}
