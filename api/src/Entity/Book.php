<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
#[ApiResource]
class Book // The class name will be used to name exposed resources
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * A name property - this description will be available in the API documentation too.
     *
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $name = '';

    /**
     *
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $author = '';

    /**
     *
     * @ORM\Column
     */
    public string $datePublished = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getDatePublished(): ?string
    {
        return $this->datePublished;
    }

    public function setDatePublished(string $datePublished): self
    {
        $this->datePublished = $datePublished;

        return $this;
    }

}