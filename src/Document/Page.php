<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document(repositoryClass="Gedmo\Tree\Document\MongoDB\Repository\MaterializedPathRepository", collection="page")
 * @Gedmo\Tree(type="materializedPath", activateLocking=false)
 * @MongoDBUnique(fields="slug")
 */
class Page
{

    /**
     * @MongoDB\Id
     * @Gedmo\TreePathSource
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     * @Gedmo\TreePath(separator=",", appendId=false)
     */
    protected $path;

    /**
     * @Gedmo\TreeParent
     * @MongoDB\ReferenceOne(targetDocument=Page::class)
     */
    private $parent;

    /**
     * @Gedmo\TreeLevel
     * @MongoDB\Field(type="int")
     */
    private $level;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $slug;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $status;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $title;

    /**
     * @MongoDB\ReferenceOne(targetDocument=Zone::class)
     * Only for realisation. Should be stored in content, but Symfony's Form can't store it in the hash
     */
    protected $zone;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $type;

    /**
     * @MongoDB\Field(type="hash")
     */
    private $content = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->slug;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getParent(): ?Page
    {
        return $this->parent;
    }

    public function setParent(?Page $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getSlugTrimmed(): ?string
    {
        return trim($this->slug, '/');
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContent(): ?array
    {
        return $this->content;
    }

    public function setContent(?array $content)
    {
        $this->content = $content;

        if (empty($this->content['meta']['titre'])) {
            $this->content['meta']['titre'] = $this->title;
        }

        return $this;
    }

    public function getZone(): ?Zone
    {
        return $this->zone;
    }

    public function setZone(?Zone $zone): self
    {
        $this->zone = $zone;

        return $this;
    }
}
