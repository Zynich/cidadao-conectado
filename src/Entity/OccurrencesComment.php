<?php

namespace App\Entity;

use App\Repository\OccurrencesCommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OccurrencesCommentRepository::class)]
class OccurrencesComment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Occurrence $occurrence = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?AdminUser $adminUser = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $commentDate = null;

    #[ORM\Column]
    private ?bool $notificationSent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOccurrence(): ?Occurrence
    {
        return $this->occurrence;
    }

    public function setOccurrence(?Occurrence $occurrence): static
    {
        $this->occurrence = $occurrence;

        return $this;
    }

    public function getAdminUser(): ?AdminUser
    {
        return $this->adminUser;
    }

    public function setAdminUser(?AdminUser $adminUser): static
    {
        $this->adminUser = $adminUser;

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

    public function getCommentDate(): ?\DateTimeInterface
    {
        return $this->commentDate;
    }

    public function setCommentDate(?\DateTimeInterface $commentDate): static
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    public function isNotificationSent(): ?bool
    {
        return $this->notificationSent;
    }

    public function setNotificationSent(bool $notificationSent): static
    {
        $this->notificationSent = $notificationSent;

        return $this;
    }
}
