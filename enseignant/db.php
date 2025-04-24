<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'Gestion_notes';
    private $username = 'root';
    private $password = '';

    private function getconnexion()
    {
        try {
            return new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function create(string $nom, string $prenom, string $specialite, string $email)
    {
        $q = $this->getconnexion()->prepare("INSERT INTO enseignants (nom, prenom, specialite, email) VALUES (:nom, :prenom, :specialite, :email)");
        return $q->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'specialite' => $specialite,
            'email' => $email
        ]);
    }
}
?>
