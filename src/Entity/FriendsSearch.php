<?php

namespace App\Entity;


class FriendsSearch {

    /**
     * @var string|null
     */
    private $friends;

    /**
     * @return string|null
     */
    public function getFriends(): ?string
    {
        return $this->friends;
    }

    /**
     * @param string|null $friends
     * @return FriendsSearch
     */
    public function setFriends(string $friends): FriendsSearch
    {
        $this->friends = $friends;
        return $this;
    }
}