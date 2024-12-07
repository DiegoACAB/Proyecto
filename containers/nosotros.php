<link rel="stylesheet" href="css/styles.css">
<div id="aboutPage" class="content">
    <h2>Sobre nosotros</h2>
    <p>En FinzApp, estamos comprometidos a ayudarte a gestionar tus finanzas de manera fácil y eficiente. Nuestra misión es proporcionar una plataforma intuitiva que empodere a las personas para tomar el control de su futuro financiero.</p>
    <p>un grupo de estudiantes en tecnología, nos aseguramos de ofrecerte herramientas seguras, rápidas y fáciles de usar.</p>
    <button type="button" class="back-button" onclick="window.history.back()">Volver</button>
</div>

<style>
#aboutPage {
  background-color: #F0F8FF;
  color: #333333; 
  padding: 40px;
  text-align: center;
  font-family: 'Montserrat', sans-serif; 
}

#aboutPage h2 {
  color: #007BFF;
  margin-bottom: 20px;
}
/* Estilo mejorado para el botón de volver en la parte superior izquierda */
.back-button {
    position: absolute; /* Posicionamiento absoluto para fijarlo en la esquina superior izquierda */
    top: 20px; /* Un poco de espacio desde la parte superior */
    left: 20px; /* Un poco de espacio desde la izquierda */
    padding: 10px 20px; /* Espaciado adecuado */
    border: 2px solid #007BFF; /* Borde azul suave */
    border-radius: 5px; /* Bordes más suaves */
    background-color: #ffffff; /* Fondo blanco para hacerlo destacar */
    color: #007BFF; /* Texto azul para armonizar con el borde */
    font-size: 16px; /* Tamaño de texto adecuado */
    font-weight: normal; /* Normal para no sobrecargar el diseño */
    cursor: pointer; /* Manito al pasar el cursor */
    transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out; /* Transición suave */
    z-index: 10; /* Asegura que esté por encima de otros elementos */
}

.back-button:hover {
    background-color: #007BFF; /* Fondo azul al hacer hover */
    color: #ffffff; /* Texto blanco al hacer hover */
    border-color: #0056b3; /* Borde más oscuro al hacer hover */
}
</style>