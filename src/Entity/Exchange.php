<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ExchangeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExchangeRepository::class)]
#[ApiResource]
class Exchange
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $user_1_last_name = null;

    #[ORM\Column(length: 255)]
    private ?string $user_1_first_name = null;

    #[ORM\Column(length: 255)]
    private ?string $user_2_last_name = null;

    #[ORM\Column(length: 255)]
    private ?string $user_2_first_name = null;

    #[ORM\Column(length: 255)]
    private ?string $tool_take = null;

    #[ORM\Column(length: 255)]
    private ?string $title_worksite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser1LastName(): ?string
    {
        return $this->user_1_last_name;
    }

    public function setUser1LastName(string $user_1_last_name): static
    {
        $this->user_1_last_name = $user_1_last_name;

        return $this;
    }

    public function getUser1FirstName(): ?string
    {
        return $this->user_1_first_name;
    }

    public function setUser1FirstName(string $user_1_first_name): static
    {
        $this->user_1_first_name = $user_1_first_name;

        return $this;
    }

    public function getUser2LastName(): ?string
    {
        return $this->user_2_last_name;
    }

    public function setUser2LastName(string $user_2_last_name): static
    {
        $this->user_2_last_name = $user_2_last_name;

        return $this;
    }

    public function getUser2FirstName(): ?string
    {
        return $this->user_2_first_name;
    }

    public function setUser2FirstName(string $user_2_first_name): static
    {
        $this->user_2_first_name = $user_2_first_name;

        return $this;
    }

    public function getToolTake(): ?string
    {
        return $this->tool_take;
    }

    public function setToolTake(string $tool_take): static
    {
        $this->tool_take = $tool_take;

        return $this;
    }

    public function getTitleWorksite(): ?string
    {
        return $this->title_worksite;
    }

    public function setTitleWorksite(string $title_worksite): static
    {
        $this->title_worksite = $title_worksite;

        return $this;
    }
}
