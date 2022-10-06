<?php

namespace App\Entity;

use App\Entity\Traits\Timestampable;
use App\Repository\DeliveryOrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: DeliveryOrderRepository::class)]
#[UniqueEntity(fields: ['reference'], message: 'Reference already existing')]
class DeliveryOrder
{
    use Timestampable;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'deliveryOrders')]
    private $client;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'deliveryOrders')]
    private $products;

    #[ORM\OneToOne(mappedBy: 'deliveryorder', targetEntity: Delivery::class, cascade: ['persist', 'remove'])]
    private $delivery;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

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

    public function getDelivery(): ?Delivery
    {
        return $this->delivery;
    }

    public function setDelivery(?Delivery $delivery): self
    {
        // unset the owning side of the relation if necessary
        if ($delivery === null && $this->delivery !== null) {
            $this->delivery->setDeliveryorder(null);
        }

        // set the owning side of the relation if necessary
        if ($delivery !== null && $delivery->getDeliveryorder() !== $this) {
            $delivery->setDeliveryorder($this);
        }

        $this->delivery = $delivery;

        return $this;
    }
    public function __toString()
    {
        return $this->reference;
    }
}
