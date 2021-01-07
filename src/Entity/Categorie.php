<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="categorie")
     */
    private $articlesCat;

    public function __construct()
    {
        $this->articlesCat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticlesCat(): Collection
    {
        return $this->articlesCat;
    }

    public function addArticlesCat(Article $articlesCat): self
    {
        if (!$this->articlesCat->contains($articlesCat)) {
            $this->articlesCat[] = $articlesCat;
            $articlesCat->setCategorie($this);
        }

        return $this;
    }

    public function removeArticlesCat(Article $articlesCat): self
    {
        if ($this->articlesCat->removeElement($articlesCat)) {
            // set the owning side to null (unless already changed)
            if ($articlesCat->getCategorie() === $this) {
                $articlesCat->setCategorie(null);
            }
        }

        return $this;
    }
}
