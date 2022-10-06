<?php

namespace App\Entity;

use App\Entity\Traits\Timestampable;
use App\Repository\StockageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: StockageRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['reference'], message: 'Reference already existing')]
class Stockage
{
    use Timestampable;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToOne(inversedBy: 'stockage', targetEntity: Receival::class, cascade: ['persist', 'remove'])]
    private $receival;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'string', length: 255)]
    private $aisle;

    #[ORM\Column(type: 'string', length: 255)]
    private $shelf;

    #[ORM\Column(type: 'string', length: 255)]
    private $level;

    #[ORM\Column(type: 'string', length: 255)]
    private $place;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReceival(): ?Receival
    {
        return $this->receival;
    }

    public function setReceival(?Receival $receival): self
    {
        $this->receival = $receival;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getAisle(): ?string
    {
        return $this->aisle;
    }

    public function setAisle(string $aisle): self
    {
        $this->aisle = $aisle;

        return $this;
    }

    public function getShelf(): ?string
    {
        return $this->shelf;
    }

    public function setShelf(string $shelf): self
    {
        $this->shelf = $shelf;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }
}
