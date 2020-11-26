<?php

namespace App\Entity;

use App\Repository\PvReceptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PvReceptionRepository::class)
 */
class PvReception
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
    private $dosage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conditionnement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numLot;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePeremption;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteRecu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $obervation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDosage(): ?string
    {
        return $this->dosage;
    }

    public function setDosage(string $dosage): self
    {
        $this->dosage = $dosage;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getConditionnement(): ?string
    {
        return $this->conditionnement;
    }

    public function setConditionnement(string $conditionnement): self
    {
        $this->conditionnement = $conditionnement;

        return $this;
    }

    public function getNumLot(): ?string
    {
        return $this->numLot;
    }

    public function setNumLot(string $numLot): self
    {
        $this->numLot = $numLot;

        return $this;
    }

    public function getDatePeremption(): ?\DateTimeInterface
    {
        return $this->datePeremption;
    }

    public function setDatePeremption(\DateTimeInterface $datePeremption): self
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    public function getQteRecu(): ?int
    {
        return $this->qteRecu;
    }

    public function setQteRecu(int $qteRecu): self
    {
        $this->qteRecu = $qteRecu;

        return $this;
    }

    public function getObervation(): ?string
    {
        return $this->obervation;
    }

    public function setObervation(string $obervation): self
    {
        $this->obervation = $obervation;

        return $this;
    }
}
