<?php

namespace App\Entity;

use App\Repository\EquipmentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentsRepository::class)]
class Equipments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $equipment_id;

    #[ORM\Column(type: 'string', length: 255)]
    private $equipment_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $equipment_status;

    #[ORM\Column(type: 'string', length: 255)]
    private $equipment_image;

    #[ORM\Column(type: 'text')]
    private $equipment_description;

    #[ORM\ManyToOne(targetEntity: Categories::class, inversedBy: 'equipments')]
    #[ORM\JoinColumn(name: "category_id", referencedColumnName: "category_id", nullable: false)]
    private $category;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'equipments')]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "user_id", nullable: false)]
    private $user;

    public function getEquipmentId(): ?int
    {
        return $this->equipment_id;
    }

    public function getEquipmentName(): ?string
    {
        return $this->equipment_name;
    }

    public function setEquipmentName(string $equipment_name): self
    {
        $this->equipment_name = $equipment_name;

        return $this;
    }

    public function getEquipmentStatus(): ?string
    {
        return $this->equipment_status;
    }

    public function setEquipmentStatus(string $equipment_status): self
    {
        $this->equipment_status = $equipment_status;

        return $this;
    }

    public function getEquipmentImage(): ?string
    {
        return $this->equipment_image;
    }

    public function setEquipmentImage(string $equipment_image): self
    {
        $this->equipment_image = $equipment_image;

        return $this;
    }

    public function getEquipmentDescription(): ?string
    {
        return $this->equipment_description;
    }

    public function setEquipmentDescription(string $equipment_description): self
    {
        $this->equipment_description = $equipment_description;

        return $this;
    }

    public function getCategory(): ?Categories
    {
        return $this->category;
    }

    public function setCategory(?Categories $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }
}