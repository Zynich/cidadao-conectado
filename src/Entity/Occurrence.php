<?php

namespace App\Entity;

use App\Repository\OccurrenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OccurrenceRepository::class)]
class Occurrence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $occurrenceCode = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    #[ORM\ManyToOne]
    private ?AdminUser $admin = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $occurredDate = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?OccurrenceType $typeOccurrence = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $generalObservation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 50)]
    private ?string $priority = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $estimatedResolution = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $additionalComments = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $evidenceDocuments = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $slaDueDate = null;

    #[ORM\Column]
    private ?bool $occurrenceClosed = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOccurrenceCode(): ?string
    {
        return $this->occurrenceCode;
    }

    public function setOccurrenceCode(string $occurrenceCode): static
    {
        $this->occurrenceCode = $occurrenceCode;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getAdmin(): ?AdminUser
    {
        return $this->admin;
    }

    public function setAdmin(?AdminUser $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getOccurredDate(): ?\DateTimeInterface
    {
        return $this->occurredDate;
    }

    public function setOccurredDate(\DateTimeInterface $occurredDate): static
    {
        $this->occurredDate = $occurredDate;

        return $this;
    }

    public function getTypeOccurrence(): ?OccurrenceType
    {
        return $this->typeOccurrence;
    }

    public function setTypeOccurrence(?OccurrenceType $typeOccurrence): static
    {
        $this->typeOccurrence = $typeOccurrence;

        return $this;
    }

    public function getGeneralObservation(): ?string
    {
        return $this->generalObservation;
    }

    public function setGeneralObservation(?string $generalObservation): static
    {
        $this->generalObservation = $generalObservation;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(string $priority): static
    {
        $this->priority = $priority;

        return $this;
    }

    public function getEstimatedResolution(): ?\DateTimeInterface
    {
        return $this->estimatedResolution;
    }

    public function setEstimatedResolution(?\DateTimeInterface $estimatedResolution): static
    {
        $this->estimatedResolution = $estimatedResolution;

        return $this;
    }

    public function getAdditionalComments(): ?string
    {
        return $this->additionalComments;
    }

    public function setAdditionalComments(?string $additionalComments): static
    {
        $this->additionalComments = $additionalComments;

        return $this;
    }

    public function getEvidenceDocuments(): ?string
    {
        return $this->evidenceDocuments;
    }

    public function setEvidenceDocuments(?string $evidenceDocuments): static
    {
        $this->evidenceDocuments = $evidenceDocuments;

        return $this;
    }

    public function getSlaDueDate(): ?\DateTimeInterface
    {
        return $this->slaDueDate;
    }

    public function setSlaDueDate(?\DateTimeInterface $slaDueDate): static
    {
        $this->slaDueDate = $slaDueDate;

        return $this;
    }

    public function isOccurrenceClosed(): ?bool
    {
        return $this->occurrenceClosed;
    }

    public function setOccurrenceClosed(bool $occurrenceClosed): static
    {
        $this->occurrenceClosed = $occurrenceClosed;

        return $this;
    }
}
