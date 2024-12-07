
<div id="featuresPage" class="content">
    <h2>Funciones</h2>
    <ul>
        <li><strong>Gestión de gastos:</strong> Registra y clasifica todos tus gastos para un control detallado de tu presupuesto.</li>
        <li><strong>Establecimiento de metas de ahorro:</strong> Define metas de ahorro y sigue tu progreso en tiempo real.</li>
        <li><strong>Recordatorios de pagos:</strong> No vuelvas a olvidar un pago con nuestras notificaciones automáticas.</li>
        <li><strong>Informes personalizados:</strong> Recibe informes detallados y visuales sobre tu situación financiera.</li>
    </ul>
    <button type="button" class="back-button" onclick="window.history.back()">Volver</button>
</div>

<style>

.content {
  background-color: #F0F8FF; 
  padding: 40px;
  text-align: center;
  font-family: Arial, sans-serif;
}

.content h2 {
  color: #007BFF; 
  margin-bottom: 20px;
}

.content ul {
  list-style: none;
  padding: 0;
}

.content li {
  margin: 10px 0;
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