<?php

namespace App\Entity;

use App\Repository\TypebiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypebiereRepository::class)]
class Typebiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_typebiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTypebiere(): ?int
    {
        return $this->id_typebiere;
    }

    public function setIdTypebiere(int $id_typebiere): static
    {
        $this->id_typebiere = $id_typebiere;

        return $this;
    }

    public function getNomTypebiere(): ?string
    {
        return $this->nom_typebiere;
    }

    public function setNomTypebiere(string $nom_typebiere): static
    {
        $this->nom_typebiere = $nom_typebiere;

        return $this;
    }
}
