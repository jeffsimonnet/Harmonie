<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Icon
 *
 * @ORM\Table(name="icon")
 * @ORM\Entity(readOnly=true)
 */
class Icon
{
    /**
     * @var int
     *
     * @ORM\Column(name="icon_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iconId;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=64, nullable=false)
     */
    private $class;

    public function getIconId(): ?int
    {
        return $this->iconId;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }


}
