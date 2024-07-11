<?php

namespace App\Entity;

use App\Repository\ContinentRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: ContinentRepository::class)]
class Continent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_continent = null;

    #[ORM\OneToMany(mappedBy: 'continent', targetEntity: Pays::class)]
    private $pays;

    public function __construct()
    {
        $this->pays = new ArrayCollection();
    }

    // Getter and Setter methods
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomContinent(): ?string
    {
        return $this->nom_continent;
    }

    public function setNomContinent(string $nom_continent): self
    {
        $this->nom_continent = $nom_continent;

        return $this;
    }    

    /**
     * @return Collection|Pays[]
     */
    public function getPays(): Collection
    {
        return $this->pays;
    }

    public function addPay(Pays $pay): self
    {
        if (!$this->pays->contains($pay)) {
            $this->pays[] = $pay;
            $pay->setContinent($this);
        }

        return $this;
    }

    public function removePay(Pays $pay): self
    {
        if ($this->pays->removeElement($pay)) {
            // set the owning side to null (unless already changed)
            if ($pay->getContinent() === $this) {
                $pay->setContinent(null);
            }
        }

        return $this;
    }
}
