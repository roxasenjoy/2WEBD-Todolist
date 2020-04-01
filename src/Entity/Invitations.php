<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="InvitationsRepository")
 */
class Invitations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $accepted_invitation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="invitations")
     */
    private $user;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcceptedInvitation(): ?bool
    {
        return $this->accepted_invitation;
    }

    public function setAcceptedInvitation(bool $accepted_invitation): self
    {
        $this->accepted_invitation = $accepted_invitation;

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
