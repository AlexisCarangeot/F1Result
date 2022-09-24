<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 * @Vich\Uploadable
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $flagFilename;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="flag_image", fileNameProperty="flagFilename")
     */
    private $flagImage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity=Team::class, mappedBy="country")
     */
    private $teams;

    /**
     * @ORM\OneToMany(targetEntity=Pilote::class, mappedBy="country")
     */
    private $pilotes;

    /**
     * @ORM\OneToMany(targetEntity=Circuit::class, mappedBy="country")
     */
    private $circuits;

    public function __construct()
    {
        $this->teams = new ArrayCollection();
        $this->pilotes = new ArrayCollection();
        $this->circuits = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getFlagFilename(): ?string
    {
        return $this->flagFilename;
    }

    /**
     * @param string|null $flagFilename
     * @return Country
     */
    public function setFlagFilename(?string $flagFilename): Country
    {
        $this->flagFilename = $flagFilename;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getFlagImage(): ?File
    {
        return $this->flagImage;
    }

    /**
     * @param File|null $flagImage
     * @return Country
     */
    public function setFlagImage(?File $flagImage): Country
    {
        $this->flagImage = $flagImage;
        if ($this -> flagImage instanceof UploadedFile){
            $this -> updatedAt = new \DateTime('now');
        }
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection|Team[]
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->teams->contains($team)) {
            $this->teams[] = $team;
            $team->setCountry($this);
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->teams->removeElement($team)) {
            // set the owning side to null (unless already changed)
            if ($team->getCountry() === $this) {
                $team->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Pilote[]
     */
    public function getPilotes(): Collection
    {
        return $this->pilotes;
    }

    public function addPilote(Pilote $pilote): self
    {
        if (!$this->pilotes->contains($pilote)) {
            $this->pilotes[] = $pilote;
            $pilote->setCountry($this);
        }

        return $this;
    }

    public function removePilote(Pilote $pilote): self
    {
        if ($this->pilotes->removeElement($pilote)) {
            // set the owning side to null (unless already changed)
            if ($pilote->getCountry() === $this) {
                $pilote->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Circuit[]
     */
    public function getCircuits(): Collection
    {
        return $this->circuits;
    }

    public function addCircuit(Circuit $circuit): self
    {
        if (!$this->circuits->contains($circuit)) {
            $this->circuits[] = $circuit;
            $circuit->setCountry($this);
        }

        return $this;
    }

    public function removeCircuit(Circuit $circuit): self
    {
        if ($this->circuits->removeElement($circuit)) {
            // set the owning side to null (unless already changed)
            if ($circuit->getCountry() === $this) {
                $circuit->setCountry(null);
            }
        }

        return $this;
    }

}