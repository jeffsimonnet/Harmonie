<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document(repositoryClass="Gedmo\Tree\Document\MongoDB\Repository\MaterializedPathRepository", collection="Zone")
 * @Gedmo\Tree(type="materializedPath", activateLocking=false)
 * @MongoDBUnique(fields="code")
 */
class Zone
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
     * @MongoDB\ReferenceOne(targetDocument=Zone::class)
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
    protected $nom;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $code;

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

    public function getParent(): ?Zone
    {
        return $this->parent;
    }

    public function setParent(?Zone $parent): self
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getFullName()
    {
        $nom = '';
        if (!empty($this->parent)) $nom .= $this->parent->getFullName() . ' / ';
        return $nom . $this->nom;
    }
}
