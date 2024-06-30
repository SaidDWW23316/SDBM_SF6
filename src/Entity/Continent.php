<?php

namespace App\Entity;

use App\Repository\ContinentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContinentRepository::class)]
class Continent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_continent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdContinent(): ?int
    {
        return $this->id_continent;
    }

    public function setIdContinent(int $id_continent): static
    {
        $this->id_continent = $id_continent;

        return $this;
    }

    public function getNomContinent(): ?string
    {
        return $this->nom_continent;
    }

    public function setNomContinent(string $nom_continent): static
    {
        $this->nom_continent = $nom_continent;

        return $this;
    }
}
