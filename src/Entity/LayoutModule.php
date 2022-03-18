<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LayoutModule
 *
 * @ORM\Table(name="layout_module")
 * @ORM\Entity(readOnly=true)
 */
class LayoutModule
{
    /**
     * @var int
     *
     * @ORM\Column(name="layout_module_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $layoutModuleId;

    /**
     * @var int
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     */
    private $layoutId;

    /**
     * @var int
     *
     * @ORM\Column(name="website_id", type="integer", nullable=false)
     */
    private $websiteId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=64, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=14, nullable=false)
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    public function getLayoutModuleId(): ?int
    {
        return $this->layoutModuleId;
    }

    public function getLayoutId(): ?int
    {
        return $this->layoutId;
    }

    public function setLayoutId(int $layoutId): self
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }

    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
