<?php

namespace App\Entity;

use App\Repository\DocumentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentsRepository::class)]
class Documents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $path;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_name;

    #[ORM\Column(type: 'datetime')]
    private $created_at;

    #[ORM\Column(type: 'datetime')]
    private $edited_at;

    #[ORM\ManyToOne(targetEntity: School::class, inversedBy: 'documents')]
    private $school_id;

    #[ORM\ManyToOne(targetEntity: Staff::class, inversedBy: 'documents')]
    private $staff_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getArabicName(): ?string
    {
        return $this->arabic_name;
    }

    public function setArabicName(?string $arabic_name): self
    {
        $this->arabic_name = $arabic_name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getEditedAt(): ?\DateTimeInterface
    {
        return $this->edited_at;
    }

    public function setEditedAt(\DateTimeInterface $edited_at): self
    {
        $this->edited_at = $edited_at;

        return $this;
    }

    public function getSchoolId(): ?School
    {
        return $this->school_id;
    }

    public function setSchoolId(?School $school_id): self
    {
        $this->school_id = $school_id;

        return $this;
    }

    public function getStaffId(): ?Staff
    {
        return $this->staff_id;
    }

    public function setStaffId(?Staff $staff_id): self
    {
        $this->staff_id = $staff_id;

        return $this;
    }
}
