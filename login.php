<?php
echo "<link re<?php
// Obtener datos del formulario
$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Conectar a la base de datos (reemplaza estos valores con los tuyos)
$servidor = "localhost:3306";
$nombreUsuario = "paolo";
$contrasenaBD = 'pa0l05ur13l';
$nombreBD = "software";

$conn = new mysqli($servidor, $nombreUsuario, $contrasenaBD, $nombreBD);

// Verificar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Preparar y ejecutar una consulta SQL para insertar datos
$consulta = "INSERT INTO datos (usuario, contraseña) VALUES ('$usuario', '$password')";

if ($conn->query($consulta) === TRUE) {
    echo '<div class="success-message">Registro exitoso</div>';
} else {
    echo '<div class="error-message">Error al registrar: ' . $conn->error . '</div>';
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<?php
echo '<style>
.success-message {
    background-color: #4CAF50; /* Color de fondo verde para mensaje de éxito */
    color: white; /* Color de texto blanco */
    padding: 10px; /* Espaciado interno */
    border-radius: 5px; /* Bordes redondeados */
    text-align: center; /* Alineación de texto al centro */
    font-weight: bold; /* Texto en negrita */
}

.error-message {
    background-color: #f44336; /* Color de fondo rojo para mensaje de error */
    color: white; /* Color de texto blanco */
    padding: 10px; /* Espaciado interno */
    border-radius: 5px; /* Bordes redondeados */
    text-align: center; /* Alineación de texto al centro */
    font-weight: bold; /* Texto en negrita */
}

      </style>';
?>
