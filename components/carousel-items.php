<?php
$db = new PDO('mysql:host=localhost;dbname=carouselbdd', 'root', '');
$sql = 'SELECT * FROM `carousel-items`';
$requete = $db->query($sql);
while ($carousel_items = $requete->fetch())
    
    echo "<div class=\"carousel-item " . $carousel_items['role'] . "\">" .
        "<img src=http://localhost/FloreilPHP/images/carousel/" . $carousel_items['image'] . " class=d-block w-100" . " alt=" . $carousel_items['image'] . ">" .
        "<div class=\"carousel-caption d-none d-md-block\">" .
        "<h5>" . $carousel_items['title'] . "</h5>" .
        "<p>" . $carousel_items['description'] . "</p>" .
        "</div>" .
        "</div>"
    ?>