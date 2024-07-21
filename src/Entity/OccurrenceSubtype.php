<?php

namespace App\Entity;

use App\Repository\OccurrenceSubtypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OccurrenceSubtypeRepository::class)]
class OccurrenceSubtype
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?OccurrenceType $occurrenceType = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOccurrenceType(): ?OccurrenceType
    {
        return $this->occurrenceType;
    }

    public function setOccurrenceType(?OccurrenceType $occurrenceType): static
    {
        $this->occurrenceType = $occurrenceType;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
