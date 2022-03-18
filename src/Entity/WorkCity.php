<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * WorkCity
 *
 * @ORM\Table(name="work_city")
 * @ORM\Entity(readOnly=true)
 */
class WorkCity
{
    /**
     * @var int
     *
     * @ORM\Column(name="work_city_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $workCityId;

    /**
     * @var int
     *
     * @ORM\Column(name="work_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $workId;

    /**
     * @var int
     *
     * @ORM\Column(name="department_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $departmentId;

    /**
     * @var int
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $image = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_bg", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $customBg = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jscode", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $jscode = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="csscode", type="text", length=65535, nullable=false)
     */
    private $csscode;

    /**
     * @var int
     *
     * @ORM\Column(name="work_year", type="integer", nullable=false)
     */
    private $workYear;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication", type="date", nullable=false, options={"default"="'0000-00-00'"})
     */
    private $publication = '\'0000-00-00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $created = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $dateModified = '\'0000-00-00 00:00:00\'';

    /**
     * @ORM\ManyToOne(targetEntity=Work::class, inversedBy="realisations")
     * @ORM\JoinColumn(name="work_id", referencedColumnName="work_id")
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=WorkCityDescription::class, mappedBy="realisation")
     * @ORM\JoinColumn(name="work_city_id", referencedColumnName="work_city_id")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Department::class)
     * @ORM\JoinColumn(name="department_id", referencedColumnName="department_id")
     */
    private $departement;

    /**
     * @ORM\ManyToOne(targetEntity=City::class)
     * @ORM\JoinColumn(name="city_id", referencedColumnName="city_id")
     */
    private $ville;

    public function __construct()
    {
        $this->description = new ArrayCollection();
    }

    public function getWorkCityId(): ?int
    {
        return $this->workCityId;
    }

    public function getWorkId(): ?int
    {
        return $this->workId;
    }

    public function getDepartmentId(): ?int
    {
        return $this->departmentId;
    }

    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCustomBg(): ?string
    {
        return $this->customBg;
    }

    public function setCustomBg(?string $customBg): self
    {
        $this->customBg = $customBg;

        return $this;
    }

    public function getJscode(): ?string
    {
        return $this->jscode;
    }

    public function setJscode(?string $jscode): self
    {
        $this->jscode = $jscode;

        return $this;
    }

    public function getCsscode(): ?string
    {
        return $this->csscode;
    }

    public function setCsscode(string $csscode): self
    {
        $this->csscode = $csscode;

        return $this;
    }

    public function getWorkYear(): ?int
    {
        return $this->workYear;
    }

    public function setWorkYear(int $workYear): self
    {
        $this->workYear = $workYear;

        return $this;
    }

    public function getPublication(): ?\DateTimeInterface
    {
        return $this->publication;
    }

    public function setPublication(\DateTimeInterface $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getCategorie(): ?Work
    {
        return $this->categorie;
    }

    public function setCategorie(?Work $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|WorkCityDescription[]
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    public function addDescription(WorkCityDescription $description): self
    {
        if (!$this->description->contains($description)) {
            $this->description[] = $description;
            $description->setRealisation($this);
        }

        return $this;
    }

    public function removeDescription(WorkCityDescription $description): self
    {
        if ($this->description->removeElement($description)) {
            // set the owning side to null (unless already changed)
            if ($description->getRealisation() === $this) {
                $description->setRealisation(null);
            }
        }

        return $this;
    }

    public function getDepartement(): ?Department
    {
        return $this->departement;
    }

    public function setDepartement(?Department $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getVille(): ?City
    {
        return $this->ville;
    }

    public function setVille(?City $ville): self
    {
        $this->ville = $ville;

        return $this;
    }


}
