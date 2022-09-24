<?php

namespace App\Entity;

use App\Repository\PiloteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PiloteRepository::class)
 * @Vich\Uploadable
 */
class Pilote
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
    private $surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $portraitFilename;


    /**
     * @var File|null
     * @Vich\UploadableField(mapping="pilote_portrait", fileNameProperty="portraitFilename")
     */
    private $pilotePortrait;


    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Team::class, inversedBy="pilotes")
     */
    private $team;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="pilotes")
     */
    private $country;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Point;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getPortraitFilename(): ?string
    {
        return $this->portraitFilename;
    }

    /**
     * @param string|null $portraitFilename
     * @return Pilote
     */
    public function setPortraitFilename(?string $portraitFilename): Pilote
    {
        $this->portraitFilename = $portraitFilename;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getPilotePortrait(): ?File
    {
        return $this->pilotePortrait;
    }

    /**
     * @param File|null $pilotePortrait
     * @return Pilote
     */
    public function setPilotePortrait(?File $pilotePortrait): Pilote
    {
        $this->pilotePortrait = $pilotePortrait;
        if ($this -> pilotePortrait instanceof UploadedFile){
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

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPoint(): ?int
    {
        return $this->Point;
    }

    public function setPoint(?int $Point): self
    {
        $this->Point = $Point;

        return $this;
    }


}
