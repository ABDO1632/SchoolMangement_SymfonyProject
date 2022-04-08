<?php

namespace App\Entity;

use App\Repository\SchoolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SchoolRepository::class)]
class School
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $phone;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $director_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $logo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $header;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $footer;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_address;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arabic_director_name;

    #[ORM\Column(type: 'datetime')]
    private $created_at;

    #[ORM\Column(type: 'datetime')]
    private $edited_at;

    #[ORM\ManyToOne(targetEntity: City::class, inversedBy: 'schools')]
    private $city_id;

    #[ORM\ManyToOne(targetEntity: Country::class, inversedBy: 'schools')]
    private $country_id;

    #[ORM\OneToMany(mappedBy: 'school_id', targetEntity: Classroom::class)]
    private $classrooms;

    #[ORM\OneToMany(mappedBy: 'school_id', targetEntity: Documents::class)]
    private $documents;

    #[ORM\OneToMany(mappedBy: 'school_id', targetEntity: Cycle::class)]
    private $cycles;

    public function __construct()
    {
        $this->classrooms = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->cycles = new ArrayCollection();
    }

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getDirectorName(): ?string
    {
        return $this->director_name;
    }

    public function setDirectorName(?string $director_name): self
    {
        $this->director_name = $director_name;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getHeader(): ?string
    {
        return $this->header;
    }

    public function setHeader(?string $header): self
    {
        $this->header = $header;

        return $this;
    }

    public function getFooter(): ?string
    {
        return $this->footer;
    }

    public function setFooter(?string $footer): self
    {
        $this->footer = $footer;

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

    public function getArabicAddress(): ?string
    {
        return $this->arabic_address;
    }

    public function setArabicAddress(?string $arabic_address): self
    {
        $this->arabic_address = $arabic_address;

        return $this;
    }

    public function getArabicDirectorName(): ?string
    {
        return $this->arabic_director_name;
    }

    public function setArabicDirectorName(?string $arabic_director_name): self
    {
        $this->arabic_director_name = $arabic_director_name;

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

    public function getCityId(): ?City
    {
        return $this->city_id;
    }

    public function setCityId(?City $city_id): self
    {
        $this->city_id = $city_id;

        return $this;
    }

    public function getCountryId(): ?Country
    {
        return $this->country_id;
    }

    public function setCountryId(?Country $country_id): self
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * @return Collection<int, Classroom>
     */
    public function getClassrooms(): Collection
    {
        return $this->classrooms;
    }

    public function addClassroom(Classroom $classroom): self
    {
        if (!$this->classrooms->contains($classroom)) {
            $this->classrooms[] = $classroom;
            $classroom->setSchoolId($this);
        }

        return $this;
    }

    public function removeClassroom(Classroom $classroom): self
    {
        if ($this->classrooms->removeElement($classroom)) {
            // set the owning side to null (unless already changed)
            if ($classroom->getSchoolId() === $this) {
                $classroom->setSchoolId(null);
            }
        }

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
            $document->setSchoolId($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getSchoolId() === $this) {
                $document->setSchoolId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cycle>
     */
    public function getCycles(): Collection
    {
        return $this->cycles;
    }

    public function addCycle(Cycle $cycle): self
    {
        if (!$this->cycles->contains($cycle)) {
            $this->cycles[] = $cycle;
            $cycle->setSchoolId($this);
        }

        return $this;
    }

    public function removeCycle(Cycle $cycle): self
    {
        if ($this->cycles->removeElement($cycle)) {
            // set the owning side to null (unless already changed)
            if ($cycle->getSchoolId() === $this) {
                $cycle->setSchoolId(null);
            }
        }

        return $this;
    }
}
