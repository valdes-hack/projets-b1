
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des notes</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <?php require_once 'header.php';?>
<section class="container py-5">
    <div class="row">
        <div class="col-lg-8 col-sm mb-5 mx-auto"></div>
        <h1 class="fs-4 text-center lead text-primary">Gestion des Enseignants, Eleves, Notes, Cours</h1>
    </div>
    
    <div class="dropdown-divider border-warning"></div>
    <div class="row">
        <div class="col-md-6">
            <h5 class="fw-bold mb-0">Listes des notes</h5>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-end">
                <buttom class="btn btn-primary btn-sm me-3"><i class="fas fa-folder-plus"></i>Nouveau</buttom>
                <a href="#" class="btn btn-success btn-sm " id="export"><i class="fas fa-table"></i>Exporter</a>
            </div>
        </div>
    </div>
    <div class="dropdown-divider border-warning"></div>
    
    <div class="row">
        <div class="table-responsive" id="orderTable">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">cours</th>
      <th scope="col">Code du cours</th>
      <th scope="col">Enseignant responsable</th>
      <th scope="col">Niveau concerné</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i=1;$i<=10;$i++): ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <a href="" class="text-info me-2 infoBtn" title="Voir détails"><i class="fas fa-info-circle"></i></a>
        <a href="" class="text-primary me-2 editBtn" title="Modifier"><i class="fas fa-edit"></i></a>
        <a href="" class="text-danger me-2 deleteBtn" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>

    <?php endfor; ?>
    
  </tbody>
</table>
        </div>
    </div>
  

   
    <div class="lien1"> <a href="eleves.php">Voir la page eleves</a></div>
    <div class="lien2"> <a href="notes.php">Voir la page notes</a></div>
    <div class="lien3"> <a href="cours.php">Voir la page Enseignants</a></div>

</section> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.css" rel="stylesheet" integrity="sha384-M6C9anzq7GcT0g1mv0hVorHndQDVZLVBkRVdRb2SsQT7evLamoeztr1ce+tvn+f2" crossorigin="anonymous">
 <script src="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.js" integrity="sha384-k90VzuFAoyBG5No1d5yn30abqlaxr9+LfAPp6pjrd7U3T77blpvmsS8GqS70xcnH" crossorigin="anonymous"></script> 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="process.js"></script>
</body>
</html>