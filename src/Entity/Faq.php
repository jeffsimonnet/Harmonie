<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Faq
 *
 * @ORM\Table(name="faq")
 * @ORM\Entity(readOnly=true)
 */
class Faq
{
    /**
     * @var int
     *
     * @ORM\Column(name="faq_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faqId;

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
     * @ORM\OneToMany(targetEntity=FaqDescription::class, mappedBy="faq")
     * @ORM\JoinColumn(name="faq_id", referencedColumnName="faq_id")
     */
    private $description;

    public function getFaqId(): ?int
    {
        return $this->faqId;
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

    /**
     * @return Collection|FaqDescription[]
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    public function addDescription(FaqDescription $description): self
    {
        if (!$this->description->contains($description)) {
            $this->description[] = $description;
            $description->setFaq($this);
        }

        return $this;
    }

    public function removeDescription(FaqDescription $description): self
    {
        if ($this->description->removeElement($description)) {
            // set the owning side to null (unless already changed)
            if ($description->getFaq() === $this) {
                $description->setFaq(null);
            }
        }

        return $this;
    }
}
