<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LayoutRoute
 *
 * @ORM\Table(name="layout_route")
 * @ORM\Entity(readOnly=true)
 */
class LayoutRoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="layout_route_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $layoutRouteId;

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
     * @ORM\Column(name="route", type="string", length=255, nullable=false)
     */
    private $route;

    public function getLayoutRouteId(): ?int
    {
        return $this->layoutRouteId;
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

    public function getRoute(): ?string
    {
        return $this->route;
    }

    public function setRoute(string $route): self
    {
        $this->route = $route;

        return $this;
    }


}
