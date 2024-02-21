<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LoanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoanRepository::class)]
#[ApiResource]
class Loan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $loan_date = null;

    #[ORM\Column(length: 255)]
    private ?string $user_name = null;

    #[ORM\Column(length: 255)]
    private ?string $tool_name = null;

    #[ORM\Column(length: 255)]
    private ?string $worksite_title = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoanDate(): ?\DateTimeInterface
    {
        return $this->loan_date;
    }

    public function setLoanDate(\DateTimeInterface $loan_date): static
    {
        $this->loan_date = $loan_date;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): static
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getToolName(): ?string
    {
        return $this->tool_name;
    }

    public function setToolName(string $tool_name): static
    {
        $this->tool_name = $tool_name;

        return $this;
    }

    public function getWorksiteTitle(): ?string
    {
        return $this->worksite_title;
    }

    public function setWorksiteTitle(string $worksite_title): static
    {
        $this->worksite_title = $worksite_title;

        return $this;
    }
}
