$(document).ready(function() {
	$('form').on('click', '.btn-delete', function (event) {
        event.preventDefault();
        if (confirm("Realmente desea eliminar este Registro ?")) {
            $(this).parent().submit();
        }
    });
});