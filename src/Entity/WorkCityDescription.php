<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkCityDescription
 *
 * @ORM\Table(name="work_city_description")
 * @ORM\Entity(readOnly=true)
 */
class WorkCityDescription
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
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="order", type="integer", nullable=false, options={"default"="1000"})
     */
    private $order = 1000;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=false)
     */
    private $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=false)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keyword", type="string", length=255, nullable=false)
     */
    private $metaKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="h1", type="string", length=255, nullable=false)
     */
    private $h1;

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

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @ORM\ManyToOne(targetEntity=WorkCity::class, inversedBy="description")
     * @ORM\JoinColumn(name="work_city_id", referencedColumnName="work_city_id")
     */
    private $realisation;

    public function getWorkCityId(): ?int
    {
        return $this->workCityId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getMetaKeyword(): ?string
    {
        return $this->metaKeyword;
    }

    public function setMetaKeyword(string $metaKeyword): self
    {
        $this->metaKeyword = $metaKeyword;

        return $this;
    }

    public function getH1(): ?string
    {
        return $this->h1;
    }

    public function setH1(string $h1): self
    {
        $this->h1 = $h1;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getRealisation(): ?WorkCity
    {
        return $this->realisation;
    }

    public function setRealisation(?WorkCity $realisation): self
    {
        $this->realisation = $realisation;

        return $this;
    }


}
