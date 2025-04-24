
$(function() {
    $('table').DataTable();

    // Ajouter un enseignant
    $('#create').on('click', function(e){
        let formOrder = $("#formOrder");
        if (formOrder[0].checkValidity()) {
            e.preventDefault();
            $.ajax({
                url: 'process_eleves.php',
                type: 'post',
                data: formOrder.serialize() + '&action=create',
                success: function(response) {
                    $('#createModal').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: response
                    });
                    formOrder[0].reset();
                }
            });
        }
    });
});
