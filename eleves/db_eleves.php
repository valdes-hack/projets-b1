<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'Gestion_notes';
    private $username = 'root';
    private $password = '';

    private function getconnexion() {
        try {
            return new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function create(string $nom, string $prenom, string $date_naissance, string $niveau) {
        $q = $this->getconnexion()->prepare("INSERT INTO eleves (nom, prenom, date_naissance, niveau) VALUES (:nom, :prenom, :date_naissance, :niveau)");
        return $q->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $date_naissance,
            'niveau' => $niveau
        ]);
    }

    // public function readAll() {
    //     $q = $this->getconnexion()->query("SELECT * FROM eleves ORDER BY id DESC");
    //     return $q->fetchAll(PDO::FETCH_ASSOC);
    // }
}
