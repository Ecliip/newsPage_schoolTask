<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);

$sql = 'select * from `usuarios`';
if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
}




echo "<div class='list_usuarios'>";
foreach ($conn->query($sql) as $row) {
    echo "<div class='usuario' id='usuario=". $row['id'] ."'>
                            <p>" . $row['nombre'] . "</p>
                            <div class='buttons-horizontal-group'>
                                <form action='/ilerna/usuario/usuario.php?id=" . $row['id'] . "' method='post'>
                                    <input type='submit' class='button-blue button button-small' value='Abrir'>
                                </form>";
                                if (isset($_SESSION['nombre'])) {
                                echo "<input 
                                    type='button' 
                                    onclick='eliminarUsuario($row[id])' 
                                    class='button-red button button-small' value='Eliminar'>";
                                }
                               echo "<script>
                                    function eliminarUsuario(id) {
                                        const element = document.getElementById('usuario='+id).remove();
                                        
                                        var xmlhttp = new XMLHttpRequest();
                                        xmlhttp.onreadystatechange = () => {
                                        if (this.readyState == 4 && this.status == 200) {
                                          console.log(this.response);
                                          }
                                        };
                                        xmlhttp.open('POST','/ilerna/usuario/eliminar.php?id='+id, true);
                                        xmlhttp.send();
                                    }
                                </script>
                            </div>
                          </div>";
}
?>
