<?php

namespace App\Entity;

use App\Repository\UserExperienceLevelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserExperienceLevelRepository::class)
 */
class UserExperienceLevel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $experience_level;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperienceLevel(): ?string
    {
        return $this->experience_level;
    }

    public function setExperienceLevel(string $experience_level): self
    {
        $this->experience_level = $experience_level;

        return $this;
    }
}
