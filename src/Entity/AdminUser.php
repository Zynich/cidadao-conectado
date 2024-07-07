<?php

namespace App\Entity;


use App\Repository\AdminUserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: AdminUserRepository::class)]
class AdminUser implements UserInterface, PasswordAuthenticatedUserInterface
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_MANAGER = 'ROLE_MANAGER';
    const ROLE_USER = 'ROLE_USER';


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(nullable: true)]
    private ?bool $enable = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastLogin = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $longLogin = null;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function isEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(?bool $enable): static
    {
        $this->enable = $enable;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): static
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getLongLogin(): ?string
    {
        return $this->longLogin;
    }

    public function setLongLogin(?string $longLogin): static
    {
        $this->longLogin = $longLogin;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function removeRole(string $role): self
    {
        if (($key = array_search($role, $this->roles)) !== false) {
            unset($this->roles[$key]);
        }
        return $this;
    }

    public function addRole(string $role): array
    {
        $this->roles[] = $role;
        $this->roles = array_unique($this->roles);
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function hasRole($role)
    {
        return in_array($role, $this->roles);
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function isSuperAdmin(): bool
    {
        return $this->hasRole('ROLE_SUPER_ADMIN');
    }

    public function isManager()
    {
        return $this->hasRole('ROLE_MANAGER');
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUsername(): string
    {
        return (string) $this->email;
    }

     /**
     * The public representation of the user (e.g. a username, an email address, etc.)
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }
}
