<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VideoDescription
 *
 * @ORM\Table(name="video_description")
 * @ORM\Entity(readOnly=true)
 */
class VideoDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="video_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $videoId;

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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    public function getVideoId(): ?int
    {
        return $this->videoId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
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


}
