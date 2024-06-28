<?php

namespace App\Entity;

use App\Repository\FabricantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FabricantRepository::class)]
class Fabricant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_fabricant = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_fabricant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFabricant(): ?int
    {
        return $this->id_fabricant;
    }

    public function setIdFabricant(int $id_fabricant): static
    {
        $this->id_fabricant = $id_fabricant;

        return $this;
    }

    public function getNomFabricant(): ?string
    {
        return $this->nom_fabricant;
    }

    public function setNomFabricant(string $nom_fabricant): static
    {
        $this->nom_fabricant = $nom_fabricant;

        return $this;
    }
}
