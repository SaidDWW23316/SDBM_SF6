<?php

namespace App\Entity;

use App\Repository\TypebiereRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: TypebiereRepository::class)]
class Typebiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_typebiere = null;

    #[ORM\OneToMany(mappedBy: 'typebiere', targetEntity: Article::class)]
    private $articles;

    
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypebiere(): ?string
    {
        return $this->nom_typebiere;
    }

    public function setNomTypebiere(string $nom_typebiere): self
    {
        $this->nom_typebiere = $nom_typebiere;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticle(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setTypebiere($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getTypebiere() === $this) {
                $article->setTypebiere(null);
            }
        }

        return $this;
    }
}
