<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
use App\Enum\GenderStatus;
use App\Enum\HeightStatus;
use App\Enum\MorphologyStatus;
use App\Enum\WeightStatus;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
>>>>>>> 7378a215ffc285d0724c5d5380bb4cc812759ef7
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
=======
    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $first_name = null;

    #[ORM\Column(length: 255)]
    private ?string $last_name = null;

    #[ORM\Column(enumType: GenderStatus::class)]
    private ?GenderStatus $gender = null;

    #[ORM\Column(enumType: HeightStatus::class)]
    private ?HeightStatus $height = null;

    #[ORM\Column(enumType: WeightStatus::class)]
    private ?WeightStatus $weight = null;

    #[ORM\Column(enumType: MorphologyStatus::class)]
    private ?MorphologyStatus $morphology = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profil_picture = null;

>>>>>>> 7378a215ffc285d0724c5d5380bb4cc812759ef7
    public function getId(): ?int
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): static
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getGender(): ?GenderStatus
    {
        return $this->gender;
    }

    public function setGender(GenderStatus $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getHeight(): ?HeightStatus
    {
        return $this->height;
    }

    public function setHeight(HeightStatus $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?WeightStatus
    {
        return $this->weight;
    }

    public function setWeight(WeightStatus $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getMorphology(): ?MorphologyStatus
    {
        return $this->morphology;
    }

    public function setMorphology(MorphologyStatus $morphology): static
    {
        $this->morphology = $morphology;

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profil_picture;
    }

    public function setProfilPicture(?string $profil_picture): static
    {
        $this->profil_picture = $profil_picture;

        return $this;
    }
>>>>>>> 7378a215ffc285d0724c5d5380bb4cc812759ef7
}
