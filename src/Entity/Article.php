<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_article = null;

    #[ORM\Column(type:"integer", nullable: true)]
    private ?int $couleurs_id;

    #[ORM\Column(type:"integer", nullable: true)]
    private ?int $types_id;

    #[ORM\Column]
    private ?int $marques_id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix_achat = null;

    #[ORM\Column]
    private ?int $volume = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 1, nullable: true)]
    private ?string $titrage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomArticle(): ?string
    {
        return $this->nom_article;
    }

    public function setNomArticle(string $nom_article): static
    {
        $this->nom_article = $nom_article;

        return $this;
    }

    public function getCouleursId(): ?int
    {
        return $this->couleurs_id;
    }

    public function setCouleursId(int $couleurs_id): static
    {
        $this->couleurs_id = $couleurs_id;

        return $this;
    }

    public function getTypesId(): ?int
    {
        return $this->types_id;
    }

    public function setTypesId(int $types_id): static
    {
        $this->types_id = $types_id;

        return $this;
    }

    public function getMarquesId(): ?int
    {
        return $this->marques_id;
    }

    public function setMarquesId(int $marques_id): static
    {
        $this->marques_id = $marques_id;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(string $prix_achat): static
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): static
    {
        $this->volume = $volume;

        return $this;
    }

    public function getTitrage(): ?string
    {
        return $this->titrage;
    }

    public function setTitrage(string $titrage): static
    {
        $this->titrage = $titrage;

        return $this;
    }
}
