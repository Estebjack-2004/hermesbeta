function enviarRechazo(numModal) {
    // Validar el formulario
    const motivo = document.getElementById(`motivoRechazo${numModal}`).value;
    const email = document.getElementById(`emailRechazo${numModal}`).value;

    if (!motivo || !email) {
        alert('Por favor complete todos los campos');
        return;
    }

    // Aquí iría la lógica para enviar el correo electrónico
    // Puedes usar AJAX, Fetch API o cualquier otro método para enviar los datos al servidor

    console.log(`Enviando rechazo a ${email} con motivo: ${motivo}`);

    // Cerrar la modal de rechazo
    $(`#rechazoModal${numModal}`).modal('hide');

    // Mostrar mensaje de éxito
    alert('El motivo de rechazo ha sido enviado al solicitante por correo electrónico');

    // Aquí podrías agregar lógica adicional como actualizar el estado en la base de datos
}