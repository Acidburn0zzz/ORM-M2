<?php
/**
 * Ce fichier est développé pour la gestion de la librairie Mélanie2
 * Cette Librairie permet d'accèder aux données sans avoir à implémenter de couche SQL
 * Des objets génériques vont permettre d'accèder et de mettre à jour les données
 *
 * ORM M2 Copyright (C) 2015  PNE Annuaire et Messagerie/MEDDE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace LibMelanie\Config;

/**
 * Configuration de l'application LDAP pour Melanie2
 *
 * @author PNE Messagerie/Apitech
 * @package Librairie Mélanie2
 * @subpackage Config
 */
class Ldap {
    /**
     * Configuration du choix de serveur utilisé pour l'authentification
     * @var string
     */
    public static $AUTH_LDAP = "ldap.test";
    /**
     * Configuration du choix de serveur utilisé pour la recherche dans l'annuaire
     * @var string
     */
    public static $SEARCH_LDAP = "ldap.test";
    /**
     * Configuration du choix de serveur utilisé pour l'autocomplétion
     * @var string
     */
    public static $AUTOCOMPLETE_LDAP = "ldap.test";
    /**
     * Configuration du choix de serveur maitre, utilisé pour l'écriture
     * @var string
     */
    public static $MASTER_LDAP = "ldap.test";

    /**
     * Configuration des serveurs LDAP
     * Chaque clé indique le nom du serveur ldap et sa configuration de connexion
     * hostname, port, dn
     * informations
     */
    public static $SERVERS = array(
            /* Serveur LDAP IDA de test */
            "ldap.test" => array(
                    /* Host vers le serveur d'annuaire, précédé par ldaps:// si connexion SSL */
                    "hostname" => "ldaps://ldap.test",
                    /* Port de connexion au LDAP */
                    "port" => 636,
                    /* Base DN de recherche */
                    "base_dn" => "dc=example,dc=com",
                    /* Version du protocole LDAP */
                    "version" => 3,
                    /* Connexion TLS */
                    "tls" => false,
                    // Configuration des attributs et filtres de recherche
                    // Filtre de recherche pour la méthode get user infos
                    "get_user_infos_filter" => "(uid=%%username%%)",
                    // Liste des attributs à récupérer pour la méthode get user infos
                    "get_user_infos_attributes" => array('cn','mail','uid','departmentnumber','info'),
            ),
    );
}
