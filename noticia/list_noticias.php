<?php
include '../compartido/funciones_bd.php';
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
}

$sql = 'select * from `noticias` order by `hora_creacion` desc';

foreach ($conn->query($sql) as $row) {
    $_SESSION['id'] = $row['id'];
    echo "<div class='noticia' id='noticia-'.$row[id].'>
   <h2 class='titulo'>" . $row['titulo'] . "</h2>
    <div class='info'>
        <span>" . date('d/m/Y', strtotime($row['hora_creacion'])) . "</span><span>" . $row['autor'] . "</span>
    </div>
   <p class='contenido'>" . $row['contenido'] . "</p>";
    if(!isset($_COOKIE['isLikedArticle-'. $row['id']])) {
        echo "<form id='likeForm'>
            <input type='button' value='Me gusta: ".$row['likes'] . "'  onclick='incrementarLikes($row[id], $row[likes])'>
         </form>";
    }
    if(isset($_COOKIE['isLikedArticle-'. $row['id']])) {
        echo "<p style='margin-left: 2rem'>Te ha gustado esta noticia! Son ".$row['likes']." likes</p>";
    }

    echo "<script>
        function incrementarLikes(id, likes) {
           
//            const arrLike = event.target.value.split(' ');
//            arrLike[2] = +arrLike[2] + 1;
//            const likes= +arrLike[2];
//            event.target.value = arrLike.join(' ');
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            }
            };
        xmlhttp.open('POST','/ilerna/noticia/incrementarLikes.php?id='+id+'&likes='+(++likes), true);
        xmlhttp.send();
        
         console.log();
        const p = document.createElement('p');
        const text = document.createTextNode('Esta noticia tiene '+likes+' likes');
        p.appendChild(text);
        p.style.marginLeft=  '2rem';
        const noticia = document.getElementById('noticia-'+id);
        event.target.parentNode.parentNode.appendChild(p);
        document.getElementById('likeForm').remove();
        }
    </script>
   </div>";


}
