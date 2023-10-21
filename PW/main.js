$(document).ready(function() {
    // Cargar historial de registros al cargar la página
    cargarHistorial();

    // Enviar datos del formulario al hacer clic en "Registrar Llenado"
    $("#llenado-form").submit(function(e) {
        e.preventDefault();
        var fecha = $("#fecha").val();
        var hora = $("#hora").val();
        var cantidad = $("#cantidad").val();
        
        $.ajax({
            type: "POST",
            url: "registrar.php",
            data: { fecha: fecha, hora: hora, cantidad: cantidad },
            success: function(response) {
                alert(response);
                cargarHistorial();
            }
        });
    });

    // Función para cargar el historial de registros
    function cargarHistorial() {
        $.ajax({
            type: "GET",
            url: "historial.php",
            success: function(data) {
                $("#historial-body").html(data);
            }
        });
    }
});
