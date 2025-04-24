<?php
// require_once "db_eleves.php";
// $db = new Database();

// if (isset($_POST['action']) && $_POST['action'] === 'create') {
//     $nom = $_POST['nom'] ?? '';
//     $prenom = $_POST['prenom'] ?? '';
//     $date_naissance = $_POST['date_naissance'] ?? '';
//     $niveau = $_POST['classe'] ?? ''; // correspond à input "classe"

//     $db->create($nom, $prenom, $date_naissance, $niveau);
//     echo 'Élève ajouté avec succès';
// }

// <?php
require_once "db_eleves.php";
$db = new Database();

// Création des enseignants
if (isset($_POST['action']) && $_POST['action'] === 'create') {
    extract($_POST);
    $db->create($nom, $prenom, $date_naissance, $niveau); // remplacer $cashier par $prenom
    echo 'Enseignant ajouté avec succès';
}
?>
