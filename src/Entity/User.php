<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MotDePasse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseNum = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseRue = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $inscription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeUtilisateur = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbEssaiesInfructueux = null;

    #[ORM\Column(nullable: true)]
    private ?bool $banni = null;

    #[ORM\Column(nullable: true)]
    private ?bool $inscritpionConfirmation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getMotDePasse(): ?string
    {
        return $this->MotDePasse;
    }

    public function setMotDePasse(?string $MotDePasse): static
    {
        $this->MotDePasse = $MotDePasse;

        return $this;
    }

    public function getAdresseNum(): ?string
    {
        return $this->adresseNum;
    }

    public function setAdresseNum(?string $adresseNum): static
    {
        $this->adresseNum = $adresseNum;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresseRue;
    }

    public function setAdresseRue(?string $adresseRue): static
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    public function getInscription(): ?\DateTimeInterface
    {
        return $this->inscription;
    }

    public function setInscription(\DateTimeInterface $inscription): static
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getTypeUtilisateur(): ?string
    {
        return $this->typeUtilisateur;
    }

    public function setTypeUtilisateur(?string $typeUtilisateur): static
    {
        $this->typeUtilisateur = $typeUtilisateur;

        return $this;
    }

    public function getNbEssaiesInfructueux(): ?int
    {
        return $this->nbEssaiesInfructueux;
    }

    public function setNbEssaiesInfructueux(?int $nbEssaiesInfructueux): static
    {
        $this->nbEssaiesInfructueux = $nbEssaiesInfructueux;

        return $this;
    }

    public function isBanni(): ?bool
    {
        return $this->banni;
    }

    public function setBanni(?bool $banni): static
    {
        $this->banni = $banni;

        return $this;
    }

    public function isInscritpionConfirmation(): ?bool
    {
        return $this->inscritpionConfirmation;
    }

    public function setInscritpionConfirmation(?bool $inscritpionConfirmation): static
    {
        $this->inscritpionConfirmation = $inscritpionConfirmation;

        return $this;
    }
}