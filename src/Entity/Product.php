<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Fashionbundle::class, inversedBy="products")
     */
    private $fashionBundles;

    public function __construct()
    {
        $this->fashionBundles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Fashionbundle[]
     */
    public function getFashionBundles(): Collection
    {
        return $this->fashionBundles;
    }

    public function addFashionBundle(Fashionbundle $fashionBundle): self
    {
        if (!$this->fashionBundles->contains($fashionBundle)) {
            $this->fashionBundles[] = $fashionBundle;
        }

        return $this;
    }

    public function removeFashionBundle(Fashionbundle $fashionBundle): self
    {
        if ($this->fashionBundles->contains($fashionBundle)) {
            $this->fashionBundles->removeElement($fashionBundle);
        }

        return $this;
    }
}
