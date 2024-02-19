<?php

namespace App\Entity;

use App\Repository\UserRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Controller\RegistrationController;

#[ApiResource(operations: [
    new Get(),
    new GetCollection(),
    new Post(
        name: 'publication', 
        uriTemplate: '/users', 
        controller: RegistrationController::class
    )
])]
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\InheritanceType('JOINED')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    protected ?string $email = null;

    #[ORM\Column]
    protected array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    protected ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    protected ?string $adresseNum = null;

    #[ORM\Column(length: 255, nullable: true)]
    protected ?string $adresseRue = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    protected ?\DateTimeInterface $inscription = null;

    #[ORM\Column(nullable: true)]
    protected ?int $nbEssaiesInfructueux = 0;

    #[ORM\Column(nullable: true)]
    protected ?bool $banni = null;

    #[ORM\Column(nullable: true)]
    protected ?bool $inscritpionConfirmation = false;

    #[Groups(['read:prestataireCards'])]
    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Localite $localite = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?CodePostal $codePostal = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Commune $commune = null;

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

    public function getLocalite(): ?Localite
    {
        return $this->localite;
    }

    public function setLocalite(?Localite $localite): static
    {
        $this->localite = $localite;

        return $this;
    }

    public function getCodePostal(): ?CodePostal
    {
        return $this->codePostal;
    }

    public function setCodePostal(?CodePostal $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): static
    {
        $this->commune = $commune;

        return $this;
    }
}
