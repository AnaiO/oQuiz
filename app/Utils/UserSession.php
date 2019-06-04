<?php

namespace App\Utils;

abstract class UserSession {

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     * 
     * @param \App\User $user
     */
    public static function connect($user) {
        $_SESSION[self::SESSION_INDEX_NAME] = $user;
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect() {
        if(self::isConnected()){
           unset($_SESSION[self::SESSION_INDEX_NAME]); 
        }
        
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     * 
     * @return bool
     */
    public static function isConnected() : bool {
        return  (!empty($_SESSION[self::SESSION_INDEX_NAME]));
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     * 
     * @return \App\User
     */
    public static function getUser() : \App\Models\User {
        if(self::isConnected()){
            return $_SESSION[self::SESSION_INDEX_NAME];
        }
    }

    /**
     * Méthode permettant de savoir si l'utilisateur connecté est admin
     * 
     * @return bool
     */
    // public static function isAdmin() : bool {
        
    // }
}