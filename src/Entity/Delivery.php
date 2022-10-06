<?php

namespace App\Entity;

use App\Entity\Traits\Timestampable;
use App\Repository\DeliveryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: DeliveryRepository::class)]
#[UniqueEntity(fields: ['reference'], message: 'Reference already existing')]
class Delivery
{
    use Timestampable;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    #[ORM\OneToOne(inversedBy: 'delivery', targetEntity: DeliveryOrder::class, cascade: ['persist', 'remove'])]
    private $deliveryorder;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\ManyToOne(targetEntity: Vehicle::class, inversedBy: 'deliveries')]
    private $vehicle;

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

    public function getDeliveryorder(): ?DeliveryOrder
    {
        return $this->deliveryorder;
    }

    public function setDeliveryorder(?DeliveryOrder $deliveryorder): self
    {
        $this->deliveryorder = $deliveryorder;

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

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }
}
