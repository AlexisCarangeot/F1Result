<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=TeamRepository::class)
 * @Vich\Uploadable
 */
class Team
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
    private $logoFilename;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $bannerFilename;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $monoplaceFilename;



    /**
     * @var File|null
     * @Vich\UploadableField(mapping="team_logo", fileNameProperty="logoFilename")
     */
    private $teamLogo;


    /**
     * @var File|null
     * @Vich\UploadableField(mapping="team_banner", fileNameProperty="bannerFilename")
     */
    private $teamBanner;


    /**
     * @var File|null
     * @Vich\UploadableField(mapping="team_monoplace", fileNameProperty="monoplaceFilename")
     */
    private $teamMonoplace;


    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="teams")
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity=Pilote::class, mappedBy="team")
     */
    private $pilotes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Point;

    public function __construct()
    {
        $this->pilotes = new ArrayCollection();
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
    public function getLogoFilename(): ?string
    {
        return $this->logoFilename;
    }

    /**
     * @param string|null $logoFilename
     * @return Team
     */
    public function setLogoFilename(?string $logoFilename): Team
    {
        $this->logoFilename = $logoFilename;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getBannerFilename(): ?string
    {
        return $this->bannerFilename;
    }

    /**
     * @param string|null $bannerFilename
     * @return Team
     */
    public function setBannerFilename(?string $bannerFilename): Team
    {
        $this->bannerFilename = $bannerFilename;
        return $this;
    }



    /**
     * @return string|null
     */
    public function getMonoplaceFilename(): ?string
    {
        return $this->monoplaceFilename;
    }

    /**
     * @param string|null $monoplaceFilename
     * @return Team
     */
    public function setMonoplaceFilename(?string $monoplaceFilename): Team
    {
        $this->monoplaceFilename = $monoplaceFilename;
        return $this;
    }


    /**
     * @return File|null
     */
    public function getTeamLogo(): ?File
    {
        return $this->teamLogo;
    }

    /**
     * @param File|null $teamLogo
     * @return Team
     */
    public function setTeamLogo(?File $teamLogo): Team
    {
        $this->teamLogo = $teamLogo;
        if ($this -> teamLogo instanceof UploadedFile){
            $this -> updatedAt = new \DateTime('now');
        }
        return $this;
    }


    /**
     * @return File|null
     */
    public function getTeamBanner(): ?File
    {
        return $this->teamBanner;
    }

    /**
     * @param File|null $teamBanner
     * @return Team
     */
    public function setTeamBanner(?File $teamBanner): Team
    {
        $this->teamBanner = $teamBanner;
        if ($this -> teamBanner instanceof UploadedFile){
            $this -> updatedAt = new \DateTime('now');
        }
        return $this;
    }



    /**
     * @return File|null
     */
    public function getTeamMonoplace(): ?File
    {
        return $this->teamMonoplace;
    }

    /**
     * @param File|null $teamMonoplace
     * @return Team
     */
    public function setTeamMonoplace(?File $teamMonoplace): Team
    {
        $this->teamMonoplace = $teamMonoplace;
        if ($this -> teamMonoplace instanceof UploadedFile){
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

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

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
            $pilote->setTeam($this);
        }

        return $this;
    }

    public function removePilote(Pilote $pilote): self
    {
        if ($this->pilotes->removeElement($pilote)) {
            // set the owning side to null (unless already changed)
            if ($pilote->getTeam() === $this) {
                $pilote->setTeam(null);
            }
        }

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
