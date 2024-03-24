<?php

namespace App\Entity;

use App\Repository\StageRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

// used to define the capabilities of the API
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Patch;

#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post(),
        new Patch(),
    ]
)]
#[ORM\Entity(repositoryClass: StageRepository::class)]
class Stage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tarif = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoComplementaire = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debut = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fin = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $affichageDe = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $afficheJusque = null;

    #[ORM\ManyToOne(inversedBy: 'stages')]
    private ?Prestataire $prestataire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): static
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getInfoComplementaire(): ?string
    {
        return $this->infoComplementaire;
    }

    public function setInfoComplementaire(?string $infoComplementaire): static
    {
        $this->infoComplementaire = $infoComplementaire;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(?\DateTimeInterface $debut): static
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(?\DateTimeInterface $fin): static
    {
        $this->fin = $fin;

        return $this;
    }

    public function getAffichageDe(): ?\DateTimeInterface
    {
        return $this->affichageDe;
    }

    public function setAffichageDe(?\DateTimeInterface $affichageDe): static
    {
        $this->affichageDe = $affichageDe;

        return $this;
    }

    public function getAfficheJusque(): ?\DateTimeInterface
    {
        return $this->afficheJusque;
    }

    public function setAfficheJusque(?\DateTimeInterface $afficheJusque): static
    {
        $this->afficheJusque = $afficheJusque;

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
}
