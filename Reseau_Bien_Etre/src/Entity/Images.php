<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource]
#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[Groups(['read:internauteInfo'])]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $ordre = null;
    
    #[Groups(['read:internauteInfo'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?CategorieDeServices $categorieDeServices = null;

    #[ORM\OneToOne(inversedBy: 'images', cascade: ['persist', 'remove'])]
    private ?Internaute $internaute = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    private ?Prestataire $prestataire = null;

    #[ORM\OneToOne(mappedBy: 'image_Logo', cascade: ['persist', 'remove'])]
    private ?Prestataire $prestataireLogo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(?int $ordre): static
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCategorieDeServices(): ?CategorieDeServices
    {
        return $this->categorieDeServices;
    }

    public function setCategorieDeServices(?CategorieDeServices $categorieDeServices): static
    {
        $this->categorieDeServices = $categorieDeServices;

        return $this;
    }

    public function getInternaute(): ?Internaute
    {
        return $this->internaute;
    }

    public function setInternaute(?Internaute $internaute): static
    {
        $this->internaute = $internaute;

        return $this;
    }

    public function getPrestataire(): ?Prestataire
    {
        return $this->prestataire;
    }

    public function setPrestataire(?Prestataire $prestataire): static
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    public function getPrestataireLogo(): ?Prestataire
    {
        return $this->prestataireLogo;
    }

    public function setPrestataireLogo(?Prestataire $prestataireLogo): static
    {
        // unset the owning side of the relation if necessary
        if ($prestataireLogo === null && $this->prestataireLogo !== null) {
            $this->prestataireLogo->setImageLogo(null);
        }

        // set the owning side of the relation if necessary
        if ($prestataireLogo !== null && $prestataireLogo->getImageLogo() !== $this) {
            $prestataireLogo->setImageLogo($this);
        }

        $this->prestataireLogo = $prestataireLogo;

        return $this;
    }
}
