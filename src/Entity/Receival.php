<?php

namespace App\Entity;

use App\Entity\Traits\Timestampable;
use App\Repository\ReceivalRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ReceivalRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['reference'], message: 'Reference already existing')]
class Receival
{
    use Timestampable;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToOne(inversedBy: 'receival', targetEntity: Commande::class, cascade: ['persist', 'remove'])]
    private $commande;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\OneToOne(mappedBy: 'receival', targetEntity: Stockage::class, cascade: ['persist', 'remove'])]
    private $stockage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStockage(): ?Stockage
    {
        return $this->stockage;
    }

    public function setStockage(?Stockage $stockage): self
    {
        // unset the owning side of the relation if necessary
        if ($stockage === null && $this->stockage !== null) {
            $this->stockage->setReceival(null);
        }

        // set the owning side of the relation if necessary
        if ($stockage !== null && $stockage->getReceival() !== $this) {
            $stockage->setReceival($this);
        }

        $this->stockage = $stockage;

        return $this;
    }
    public function __toString()
    {
        return $this->reference;
    }
}
