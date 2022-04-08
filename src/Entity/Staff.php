<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StaffRepository::class)]
class Staff
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $last_name;

    #[ORM\Column(type: 'date', nullable: true)]
    private $birth_date;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $national_number;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $gender;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $postal_code;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $social_security;

    #[ORM\Column(type: 'date', nullable: true)]
    private $recruitment_date;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dismissal_date;

    #[ORM\Column(type: 'float', nullable: true)]
    private $salary;

    #[ORM\Column(type: 'text', nullable: true)]
    private $observations;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_first_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_last_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $picture;

    #[ORM\Column(type: 'datetime')]
    private $created_at;

    #[ORM\Column(type: 'datetime')]
    private $edited_at;

    #[ORM\OneToMany(mappedBy: 'staff_id', targetEntity: Documents::class)]
    private $documents;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(?string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(?string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(?\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getNationalNumber(): ?string
    {
        return $this->national_number;
    }

    public function setNationalNumber(?string $national_number): self
    {
        $this->national_number = $national_number;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getSocialSecurity(): ?string
    {
        return $this->social_security;
    }

    public function setSocialSecurity(?string $social_security): self
    {
        $this->social_security = $social_security;

        return $this;
    }

    public function getRecruitmentDate(): ?\DateTimeInterface
    {
        return $this->recruitment_date;
    }

    public function setRecruitmentDate(?\DateTimeInterface $recruitment_date): self
    {
        $this->recruitment_date = $recruitment_date;

        return $this;
    }

    public function getDismissalDate(): ?\DateTimeInterface
    {
        return $this->dismissal_date;
    }

    public function setDismissalDate(?\DateTimeInterface $dismissal_date): self
    {
        $this->dismissal_date = $dismissal_date;

        return $this;
    }

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(?float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getArabicFirstName(): ?string
    {
        return $this->arabic_first_name;
    }

    public function setArabicFirstName(?string $arabic_first_name): self
    {
        $this->arabic_first_name = $arabic_first_name;

        return $this;
    }

    public function getArabicLastName(): ?string
    {
        return $this->arabic_last_name;
    }

    public function setArabicLastName(?string $arabic_last_name): self
    {
        $this->arabic_last_name = $arabic_last_name;

        return $this;
    }

    public function getArabicAddress(): ?string
    {
        return $this->arabic_address;
    }

    public function setArabicAddress(?string $arabic_address): self
    {
        $this->arabic_address = $arabic_address;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

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

    /**
     * @return Collection<int, Documents>
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setStaffId($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getStaffId() === $this) {
                $document->setStaffId(null);
            }
        }

        return $this;
    }
}
