<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageRoute
 *
 * @ORM\Table(name="page_route")
 * @ORM\Entity(readOnly=true)
 */
class PageRoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="pages_route_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pagesRouteId;

    /**
     * @var int
     *
     * @ORM\Column(name="page_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pageId;

    /**
     * @var int
     *
     * @ORM\Column(name="route_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $routeId;

    public function getPagesRouteId(): ?int
    {
        return $this->pagesRouteId;
    }

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function getRouteId(): ?int
    {
        return $this->routeId;
    }


}
