<?php

namespace App\Entity;

use App\Repository\EquipmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipmentRepository::class)
 */
class Equipment
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $availableStock;

    /**
     * @ORM\Column(type="integer")
     */
    private $allowedDays;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $uid;

    /**
     * @ORM\OneToMany(targetEntity=Borrowing::class, mappedBy="equipment")
     */
    private $borrowings;

    public function __construct()
    {
        $this->borrowings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAvailableStock(): ?int
    {
        return $this->availableStock;
    }

    public function setAvailableStock(int $availableStock): self
    {
        $this->availableStock = $availableStock;

        return $this;
    }

    public function getAllowedDays(): ?int
    {
        return $this->allowedDays;
    }

    public function setAllowedDays(int $allowedDays): self
    {
        $this->allowedDays = $allowedDays;

        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @return Collection|Borrowing[]
     */
    public function getBorrowings(): Collection
    {
        return $this->borrowings;
    }

    public function addBorrowing(Borrowing $borrowing): self
    {
        if (!$this->borrowings->contains($borrowing)) {
            $this->borrowings[] = $borrowing;
            $borrowing->setEquipment($this);
        }

        return $this;
    }

    public function removeBorrowing(Borrowing $borrowing): self
    {
        if ($this->borrowings->removeElement($borrowing)) {
            // set the owning side to null (unless already changed)
            if ($borrowing->getEquipment() === $this) {
                $borrowing->setEquipment(null);
            }
        }

        return $this;
    }
}
