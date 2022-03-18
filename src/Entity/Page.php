<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(readOnly=true)
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="page_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var bool
     *
     * @ORM\Column(name="home_page", type="boolean", nullable=false)
     */
    private $homePage;

    /**
     * @var bool
     *
     * @ORM\Column(name="contact_form", type="boolean", nullable=false)
     */
    private $contactForm;

    /**
     * @var bool
     *
     * @ORM\Column(name="login", type="boolean", nullable=false)
     */
    private $login;

    /**
     * @var bool
     *
     * @ORM\Column(name="activate", type="boolean", nullable=false)
     */
    private $activate;

    /**
     * @var bool
     *
     * @ORM\Column(name="account", type="boolean", nullable=false)
     */
    private $account;

    /**
     * @var bool
     *
     * @ORM\Column(name="register", type="boolean", nullable=false)
     */
    private $register;

    /**
     * @var bool
     *
     * @ORM\Column(name="search", type="boolean", nullable=false)
     */
    private $search;

    /**
     * @var bool
     *
     * @ORM\Column(name="sitemap", type="boolean", nullable=false)
     */
    private $sitemap;

    /**
     * @var bool
     *
     * @ORM\Column(name="profile", type="boolean", nullable=false)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="membership_id", type="string", length=20, nullable=false)
     */
    private $membershipId;

    /**
     * @var int
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_data", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $moduleData = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $moduleName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $image = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_bg", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $customBg = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="access", type="string", length=0, nullable=false, options={"default"="'Public'"})
     */
    private $access = '\'Public\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="csscode", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $csscode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jscode", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $jscode = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=40, nullable=false)
     */
    private $route;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $created = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $dateModified = '\'0000-00-00 00:00:00\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity=PageDescription::class, mappedBy="page")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="page_id")
     */
    private $description;

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getHomePage(): ?bool
    {
        return $this->homePage;
    }

    public function setHomePage(bool $homePage): self
    {
        $this->homePage = $homePage;

        return $this;
    }

    public function getContactForm(): ?bool
    {
        return $this->contactForm;
    }

    public function setContactForm(bool $contactForm): self
    {
        $this->contactForm = $contactForm;

        return $this;
    }

    public function getLogin(): ?bool
    {
        return $this->login;
    }

    public function setLogin(bool $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getActivate(): ?bool
    {
        return $this->activate;
    }

    public function setActivate(bool $activate): self
    {
        $this->activate = $activate;

        return $this;
    }

    public function getAccount(): ?bool
    {
        return $this->account;
    }

    public function setAccount(bool $account): self
    {
        $this->account = $account;

        return $this;
    }

    public function getRegister(): ?bool
    {
        return $this->register;
    }

    public function setRegister(bool $register): self
    {
        $this->register = $register;

        return $this;
    }

    public function getSearch(): ?bool
    {
        return $this->search;
    }

    public function setSearch(bool $search): self
    {
        $this->search = $search;

        return $this;
    }

    public function getSitemap(): ?bool
    {
        return $this->sitemap;
    }

    public function setSitemap(bool $sitemap): self
    {
        $this->sitemap = $sitemap;

        return $this;
    }

    public function getProfile(): ?bool
    {
        return $this->profile;
    }

    public function setProfile(bool $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getMembershipId(): ?string
    {
        return $this->membershipId;
    }

    public function setMembershipId(string $membershipId): self
    {
        $this->membershipId = $membershipId;

        return $this;
    }

    public function getModuleId(): ?int
    {
        return $this->moduleId;
    }

    public function setModuleId(int $moduleId): self
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    public function getModuleData(): ?string
    {
        return $this->moduleData;
    }

    public function setModuleData(?string $moduleData): self
    {
        $this->moduleData = $moduleData;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCustomBg(): ?string
    {
        return $this->customBg;
    }

    public function setCustomBg(?string $customBg): self
    {
        $this->customBg = $customBg;

        return $this;
    }

    public function getAccess(): ?string
    {
        return $this->access;
    }

    public function setAccess(string $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getCsscode(): ?string
    {
        return $this->csscode;
    }

    public function setCsscode(?string $csscode): self
    {
        $this->csscode = $csscode;

        return $this;
    }

    public function getJscode(): ?string
    {
        return $this->jscode;
    }

    public function setJscode(?string $jscode): self
    {
        $this->jscode = $jscode;

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

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection|PageDescription[]
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    public function addDescription(PageDescription $description): self
    {
        if (!$this->description->contains($description)) {
            $this->description[] = $description;
            $description->setPage($this);
        }

        return $this;
    }

    public function removeDescription(PAgeDescription $description): self
    {
        if ($this->description->removeElement($description)) {
            // set the owning side to null (unless already changed)
            if ($description->getPage() === $this) {
                $description->setPage(null);
            }
        }

        return $this;
    }
}
