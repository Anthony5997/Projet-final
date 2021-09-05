<?php

namespace App\Entity;

use App\Repository\TravelPreferencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TravelPreferencesRepository::class)
 */
class TravelPreferences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $discussion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $music;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $smoking;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $animals;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $health_pass;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $user;

  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscussion(): ?string
    {
        return $this->discussion;
    }

    public function setDiscussion(?string $discussion): self
    {
        $this->discussion = $discussion;

        return $this;
    }

    public function getMusic(): ?string
    {
        return $this->music;
    }

    public function setMusic(?string $music): self
    {
        $this->music = $music;

        return $this;
    }

    public function getSmoking(): ?string
    {
        return $this->smoking;
    }

    public function setSmoking(?string $smoking): self
    {
        $this->smoking = $smoking;

        return $this;
    }

    public function getAnimals(): ?string
    {
        return $this->animals;
    }

    public function setAnimals(?string $animals): self
    {
        $this->animals = $animals;

        return $this;
    }

    public function getHealthPass(): ?string
    {
        return $this->health_pass;
    }

    public function setHealthPass(?string $health_pass): self
    {
        $this->health_pass = $health_pass;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
