<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $category_id;

    #[ORM\Column(type: 'string', length: 255)]
    private $category_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $category_image;

    #[ORM\Column(type: 'text', length: 2500)]
    private $category_description;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Equipments::class)]
    private $equipment;

    public function __construct()
    {
        $this->equipment = new ArrayCollection();
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $category_name): self
    {
        $this->category_name = $category_name;

        return $this;
    }

    public function getCategoryImage(): ?string
    {
        return $this->category_image;
    }

    public function setCategoryImage(string $category_image): self
    {
        $this->category_image = $category_image;

        return $this;
    }

    public function getCategoryDescription(): ?string
    {
        return $this->category_description;
    }

    public function setCategoryDescription(string $category_description): self
    {
        $this->category_description = $category_description;

        return $this;
    }

    /**
     * @return Collection<int, Equipments>
     */
    public function getEquipment(): Collection
    {
        return $this->equipment;
    }

    public function addEquipment(Equipments $equipment): self
    {
        if (!$this->equipment->contains($equipment)) {
            $this->equipment[] = $equipment;
            $equipment->setCategory($this);
        }

        return $this;
    }

    public function removeEquipment(Equipments $equipment): self
    {
        if ($this->equipment->removeElement($equipment)) {
            // set the owning side to null (unless already changed)
            if ($equipment->getCategory() === $this) {
                $equipment->setCategory(null);
            }
        }

        return $this;
    }
}