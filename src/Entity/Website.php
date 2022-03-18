<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Website
 *
 * @ORM\Table(name="website")
 * @ORM\Entity(readOnly=true)
 */
class Website
{
    /**
     * @var int
     *
     * @ORM\Column(name="website_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $websiteId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="ssl", type="string", length=255, nullable=false)
     */
    private $ssl;

    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSsl(): ?string
    {
        return $this->ssl;
    }

    public function setSsl(string $ssl): self
    {
        $this->ssl = $ssl;

        return $this;
    }


}
