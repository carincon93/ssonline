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
        $servicio_id =  $(this).attr('data-idservicio');
        $user_id = $(this).attr('data-iduser');
        $.post('agregar_servicio',
        {
            user_id: $user_id,
            servicio_id: $servicio_id,
            _token: $token

        }, function(data, textStatus, xhr) {
            /*optional stuff to do after success */
        });
    });
});
