<?php

namespace App\Utils;

abstract class UserSession {

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     * 
     * @param \App\Models\User $user
     */
    public static function connect(\App\Models\User $user) {
        
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect() {
        
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     * 
     * @return bool
     */
    public static function isConnected() : bool {
        
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     * 
     * @return \App\Models\User
     */
    public static function getUser() : \App\Models\User {
        
    }

    /**
     * Méthode permettant de savoir si l'utilisateur connecté est admin
     * 
     * @return bool
     */
    public static function isAdmin() : bool {
        
    }
}