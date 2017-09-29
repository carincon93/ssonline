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
});
