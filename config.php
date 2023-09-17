<?php
class config {
    private static $instance = NULL;

    public static function getConnexion() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=clubesprit', 'root', ''); 
        return self::$instance;
    }}

    public static function afficherClubs() {
        $db = self::getConnexion();
        $statement ='SELECT * FROM club';
        $query = $db->query($statement);
        $clubs = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($clubs as $club) {
            echo "ID: {$club['id']}\n";
            echo "Nom: {$club['nom']}\n";
            echo "Description: {$club['description']}\n";
            echo "Adresse: {$club['adresse']}\n";
            echo "Domaine: {$club['domaine']}\n";
            echo "-------------------\n";
        }
    }
}
?>
