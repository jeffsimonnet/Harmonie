<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuDescription
 *
 * @ORM\Table(name="menu_description")
 * @ORM\Entity(readOnly=true)
 */
class MenuDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="menu_description_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuDescriptionId;

    /**
     * @var int
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     */
    private $menuId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=100, nullable=false)
     */
    private $caption;

    public function getMenuDescriptionId(): ?int
    {
        return $this->menuDescriptionId;
    }

    public function getMenuId(): ?int
    {
        return $this->menuId;
    }

    public function setMenuId(int $menuId): self
    {
        $this->menuId = $menuId;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
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

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }


}
