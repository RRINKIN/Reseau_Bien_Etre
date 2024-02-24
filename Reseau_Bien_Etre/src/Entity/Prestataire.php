<?php
namespace App\Entity;

use App\Repository\PrestataireRepository;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\Link;

#[ApiResource(
    uriTemplate: '/service/{serviceId}/prestataire',
    uriVariables: [
        'serviceId' => new Link(fromClass: CategorieDeServices::class, toProperty: 'proposer'),
    ],
    operations: [ new GetCollection(normalizationContext:['groups' => ['read:prestataireCards']], ) ]
)]
#[ApiResource(
    // defines read (GET) context on class level. (what properties will be returned in the API)
    normalizationContext: ['groups' => ['read:prestataireCards']],
    // limit the export of the items in the Json returned by the API
    paginationItemsPerPage: 9,
    order: ['id' => 'DESC'],
    operations: [
        new Get(),
        new Put(),
        new Delete(),
        new GetCollection(),
        new Post(),
    ]
)]
#[ApiFilter(SearchFilter::class, properties: ['nom' => 'partial', 'proposer.nom' => 'partial', 'localite.localite' => 'partial', 'commune.commune' => 'partial', 'codePostal.codePostal' => 'partial'])]
#[ORM\Entity(repositoryClass: PrestataireRepository::class)]
class Prestataire extends User
{
    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siteInternet = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numTel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numTVA = null;

    #[ORM\OneToMany(mappedBy: 'prestataire', targetEntity: Stage::class)]
    private Collection $stages;

    #[ORM\OneToMany(mappedBy: 'prestataire', targetEntity: Promotion::class)]
    private Collection $promotions;

    #[ORM\OneToMany(mappedBy: 'prestataire', targetEntity: Images::class)]
    private Collection $images;

    #[ORM\OneToMany(mappedBy: 'prestataire', targetEntity: Commentaire::class)]
    private Collection $commentaires;

    #[ORM\OneToOne(inversedBy: 'prestataireLogo', cascade: ['persist', 'remove'])]
    private ?Images $image_Logo = null;

    #[Groups(['read:prestataireCards'])]
    #[ORM\ManyToMany(targetEntity: CategorieDeServices::class, inversedBy: 'prestataires')]
    private Collection $proposer;

    public function __construct()
    {
        $this->stages = new ArrayCollection();
        $this->promotions = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->proposer = new ArrayCollection();
    }

    #[Groups(['read:prestataireCards'])]
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

    public function getSiteInternet(): ?string
    {
        return $this->siteInternet;
    }

    public function setSiteInternet(string $siteInternet): static
    {
        $this->siteInternet = $siteInternet;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(?string $numTel): static
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getNumTVA(): ?string
    {
        return $this->numTVA;
    }

    public function setNumTVA(?string $numTVA): static
    {
        $this->numTVA = $numTVA;

        return $this;
    }

    /**
     * @return Collection<int, Stage>
     */
    public function getStages(): Collection
    {
        return $this->stages;
    }

    public function addStage(Stage $stage): static
    {
        if (!$this->stages->contains($stage)) {
            $this->stages->add($stage);
            $stage->setPrestataire($this);
        }

        return $this;
    }

    public function removeStage(Stage $stage): static
    {
        if ($this->stages->removeElement($stage)) {
            // set the owning side to null (unless already changed)
            if ($stage->getPrestataire() === $this) {
                $stage->setPrestataire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Promotion>
     */
    public function getPromotions(): Collection
    {
        return $this->promotions;
    }

    public function addPromotion(Promotion $promotion): static
    {
        if (!$this->promotions->contains($promotion)) {
            $this->promotions->add($promotion);
            $promotion->setPrestataire($this);
        }

        return $this;
    }

    public function removePromotion(Promotion $promotion): static
    {
        if ($this->promotions->removeElement($promotion)) {
            // set the owning side to null (unless already changed)
            if ($promotion->getPrestataire() === $this) {
                $promotion->setPrestataire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Images>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): static
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setPrestataire($this);
        }

        return $this;
    }

    public function removeImage(Images $image): static
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getPrestataire() === $this) {
                $image->setPrestataire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setPrestataire($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPrestataire() === $this) {
                $commentaire->setPrestataire(null);
            }
        }

        return $this;
    }

    public function getImageLogo(): ?Images
    {
        return $this->image_Logo;
    }

    public function setImageLogo(?Images $image_Logo): static
    {
        $this->image_Logo = $image_Logo;

        return $this;
    }

    /**
     * @return Collection<int, CategorieDeServices>
     */
    public function getProposer(): Collection
    {
        return $this->proposer;
    }

    public function addProposer(CategorieDeServices $proposer): static
    {
        if (!$this->proposer->contains($proposer)) {
            $this->proposer->add($proposer);
        }

        return $this;
    }

    public function removeProposer(CategorieDeServices $proposer): static
    {
        $this->proposer->removeElement($proposer);

        return $this;
    }
}
