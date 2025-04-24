
<?php
require_once "db.php";
$db = new Database();

// Création des enseignants
if (isset($_POST['action']) && $_POST['action'] === 'create') {
    extract($_POST);
    $db->create($nom, $prenom, $specialite, $email); // remplacer $cashier par $prenom
    echo 'Enseignant ajouté avec succès';
}
?>
