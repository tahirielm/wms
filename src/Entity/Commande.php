<?php

namespace App\Entity;

use App\Entity\Traits\Timestampable;
use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['reference'], message: 'Reference already existing')]
class Commande
{

    use Timestampable;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\ManyToOne(targetEntity: Supplier::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private $supplier;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'commandes')]
    private $products;

    #[ORM\OneToOne(mappedBy: 'commande', targetEntity: Receival::class, cascade: ['persist', 'remove'])]
    private $receival;

    #[ORM\Column(type: 'json')]
    private $prooducts = [];

    #[ORM\Column(type: 'array')]
    private $proooducts = [];

    // #[ORM\Column(type: 'string', length: 255)]
    // private $active;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): self
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        $this->products->removeElement($product);

        return $this;
    }

    public function getReceival(): ?Receival
    {
        return $this->receival;
    }

    public function setReceival(?Receival $receival): self
    {
        // unset the owning side of the relation if necessary
        if ($receival === null && $this->receival !== null) {
            $this->receival->setCommande(null);
        }

        // set the owning side of the relation if necessary
        if ($receival !== null && $receival->getCommande() !== $this) {
            $receival->setCommande($this);
        }

        $this->receival = $receival;

        return $this;
    }

    public function __toString()
    {
        return $this->reference;
    }

    public function getProoducts(): ?array
    {
        return $this->prooducts;
    }

    public function setProoducts(array $prooducts): self
    {
        $this->prooducts = $prooducts;

        return $this;
    }

    public function getProooducts(): ?array
    {
        return $this->proooducts;
    }

    public function setProooducts(array $proooducts): self
    {
        $this->proooducts = $proooducts;

        return $this;
    }

    // public function getActive(): ?string
    // {
    //     return $this->active;
    // }

    // public function setActive(string $active): self
    // {
    //     $this->active = $active;

    //     return $this;
    // }
}
