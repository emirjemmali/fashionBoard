<?php

namespace App\Entity;

use App\Repository\FashionbundleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FashionbundleRepository::class)
 */
class Fashionbundle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @var int
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="fashionbordern", type="integer", nullable=false)
     */
    private $fashionbordernumber;
    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=256, nullable=false)
     */
    private $description;
    /**
     * @var boolean
     * @ORM\Column(name="promotionstatus", type="boolean", length=256, nullable=false)
     */
    private $promotionstatus;
    /**
     * @var int
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="promotion", type="integer", nullable=false)     */
    private $promotion;
    /**
     * @var int
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity=Product::class, mappedBy="fashionBundles")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    /**
     * @return int
     */

    public function getFashionbordernumber(): int
    {
        return $this->fashionbordernumber;
    }

    /**
     * @param int $fashionbordernumber
     */
    public function setFashionbordernumber(int $fashionbordernumber): void
    {
        $this->fashionbordernumber = $fashionbordernumber;
    }
    /**
     * @return int
     */
    public function  getfashionbordern():int{
            return  $this->fashionbordernumber;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    /**
     * @return bool
     */
    public function isPromotionstatus(): bool
    {
        return $this->promotionstatus;
    }

    /**
     * @param bool $promotionstatus
     */
    public function setPromotionstatus(bool $promotionstatus): void
    {
        $this->promotionstatus = $promotionstatus;
    }

    /**
     * @return int
     */
    public function getPromotion(): int
    {
        return $this->promotion;
    }

    /**
     * @param int $promotion
     */
    public function setPromotion(int $promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->addFashionBundle($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
            $product->removeFashionBundle($this);
        }

        return $this;
    }

}
