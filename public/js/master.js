$(document).ready(function() {
    $('.table').on('click', '.btn-delete', function (e) {
        e.preventDefault();
        var $formDel = $(this).parent();
        $('.modal').find('.modal-body').text('Está seguro que desea eliminar este registro?');
        $('#btn-delete').text('Eliminar');
        $('#confirm-delete').modal({ backdrop: 'static', keyboard: false }).on('click', '#btn-delete', function () {
            $formDel.submit();
        });
    });

    $('body').on('click', '.agregar-servicio', function(event) {
        event.preventDefault();
        $token =  $('#form-adquirir').find('input[name="_token"]').val();
        $nombre_usuario = $(this).attr('data-usuario');
        $email_usuario = $(this).attr('data-email');
        $servicio =  $(this).attr('data-servicio');
        $.post('agregar_servicio',
        {
            nombre_usuario: $nombre_usuario,
            email_usuario: $email_usuario,
            servicio: $servicio,
            _token: $token

        }, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    });
});
