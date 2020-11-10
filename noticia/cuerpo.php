<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
}

$sql = 'select * from `noticias` order by `hora_creacion` desc limit 5';
foreach ($conn->query($sql) as $row) {
    echo    "<div class='noticia' id='noticia=". $row['id'] ."'>
                <h2 class='titulo'>" . $row['titulo'] . "</h2>
                <div class='info'>
                            <span>" . date('d/m/Y', strtotime($row['hora_creacion'])) . "</span><span>" . $row['autor'] . "</span>
                </div>
                <p class='contenido'>" . $row['contenido'] . "</p>
                <div class='buttons'>
                <form action='noticia/llamada.php?article=" . $row['id'] . "' method='post'>
                    <input type='submit' class='button button-green' value='Abrir'>
                </form>";
                if(isset($_SESSION['nombre'])) {
                    echo "<input type='button' class='button button-red' value='Eliminar' onclick='eliminarNoticia($row[id])'>";
                }
                echo "</div>
             <script>
                    function eliminarNoticia(id) {
                        document.getElementById('noticia='+id).remove();
                        
                        const xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = () => {
                            if (this.status == 200 && this.readyState == 4) {
                                console.log(this.response);
                            }
                        }
                        xmlhttp.open('POST', '/ilerna/noticia/eliminar_noticia.php?id='+id, true);
                        xmlhttp.send();
                        }
                </script>
            </div>";
}