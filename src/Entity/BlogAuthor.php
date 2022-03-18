<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogAuthor
 *
 * @ORM\Table(name="blog_author")
 * @ORM\Entity(readOnly=true)
 */
class BlogAuthor
{
    /**
     * @var int
     *
     * @ORM\Column(name="blog_author_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogAuthorId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    public function getBlogAuthorId(): ?int
    {
        return $this->blogAuthorId;
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


}
