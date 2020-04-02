<?php

namespace App\Entity;


class FriendsSearch {

    /*
     *Fonction : Rechercher les amis en fonction de ce que l'utilisateur rentre
     * La fonction n'est pas faite mais voici la manière de procéder :
     *  - Créer le formulaire qui permet de récuperer l'entrée utilisateur (Tout en supprimant les utilisateurs déjà présents dans la liste des amis)
     *  - Créer une entity Friends
     *  - Dans le repository, recuperer tout les utilisateurs afin de les afficher.
     */


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