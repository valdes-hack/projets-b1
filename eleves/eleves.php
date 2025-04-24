<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Eleves</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<?php require_once '../php/header.php'; ?>

<section class="container py-5">
    <div class="row">
        <div class="col-lg-8 col-sm mb-5 mx-auto"></div>
        <h1 class="fs-4 text-center lead text-primary">Gestion des Enseignants, Eleves, Notes, Cours</h1>
    </div>

    <div class="dropdown-divider border-warning"></div>
    <div class="row">
        <div class="col-md-6">
            <h5 class="fw-bold mb-0">Listes des Eleves</h5>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#createEleveModal">
                    <i class="fas fa-folder-plus"></i> Nouveau
                </button>
                <a href="#" class="btn btn-success btn-sm" id="export"><i class="fas fa-table"></i>Exporter</a>
            </div>
        </div>
    </div>

    <div class="dropdown-divider border-warning"></div>

    <div class="row">
        <div class="table-responsive" id="orderTable">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nom</th>
                        <th>prénom</th>
                        <th>date de naissance</th>
                        <th>classe/niveau</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                    <tr>
                        <th><?php echo $i ?></th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>2000-01-01</td>
                        <td>Terminale</td>
                        <td>
                            <a href="#" class="text-info me-2 infoBtn"><i class="fas fa-info-circle"></i></a>
                            <a href="#" class="text-primary me-2 editBtn"><i class="fas fa-edit"></i></a>
                            <a href="#" class="text-danger me-2 deleteBtn"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="lien1"><a href="enseignant.php">Voir la page Enseignants</a></div>
    <div class="lien2"><a href="notes.php">Voir la page notes</a></div>
    <div class="lien3"><a href="cours.php">Voir la page cours</a></div>
</section>

<!-- Modal d'ajout élève -->
<div class="modal fade" id="createEleveModal" tabindex="-1" aria-labelledby="createEleveModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="formEleve" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createEleveModalLabel">Ajouter un élève</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" required>
          </div>
          <div class="mb-3">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="prenom" required>
          </div>
          <div class="mb-3">
              <label for="date_naissance" class="form-label">Date de naissance</label>
              <input type="date" class="form-control" name="date_naissance" required>
          </div>
          <div class="mb-3">
              <label for="classe" class="form-label">Classe/Niveau</label>
              <input type="text" class="form-control" name="classe" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary" name="create" id="create">Ajouter <i class="fas fa-plus"></i></button>
      </div>
    </form>
  </div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="eleves.js"></script>

</body>
</html>
