<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembershipDescription
 *
 * @ORM\Table(name="membership_description", indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity(readOnly=true)
 */
class MembershipDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="membership_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $membershipId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image_alt", type="string", length=255, nullable=false)
     */
    private $imageAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="image_title", type="string", length=255, nullable=false)
     */
    private $imageTitle;

    public function getMembershipId(): ?int
    {
        return $this->membershipId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
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

    public function getImageAlt(): ?string
    {
        return $this->imageAlt;
    }

    public function setImageAlt(string $imageAlt): self
    {
        $this->imageAlt = $imageAlt;

        return $this;
    }

    public function getImageTitle(): ?string
    {
        return $this->imageTitle;
    }

    public function setImageTitle(string $imageTitle): self
    {
        $this->imageTitle = $imageTitle;

        return $this;
    }


}
