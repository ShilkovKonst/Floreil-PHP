<?php
$db = new PDO('mysql:host=localhost;dbname=commercecards', 'root', '');
$sql = 'SELECT * FROM `cards`';
$requete = $db->query($sql);
while ($card = $requete->fetch())
    echo "<div class=\"col-12 col-md-6 col-lg-4 my-3\">" .
        "<a to=" . $card['link'] . " class=\"card_text_link text-decoration-none\">" .
        "<ul class=\"list-group list-group-horizontal card_shadow rounded-0 rounded-top card-title-height\">" .
        "<li" .
        " class=\"list-group-item w-100 bg_color_22 d-flex justify-content-evenly align-items-center\">" .
        "<i class=\"fa fa-solid fa-arrow-right text-center my-1\"></i>" .
        "<h5 class=\"text-center fw-bold align-middle mb-0\">" . $card['title'] . "</h5>" .
        "<i class=\"fa fa-solid fa-arrow-left\"></i>" .
        "</li>" .
        "</ul>" .
        "</a>" .
        "<div class=\"card rot_y_180_toggler\">" .
        "<img src=http://localhost/FloreilPHP/images/" . $card['image'] .
        " class=\"card-img rotatable_y_0_to_180 card_shadow rounded-0\" alt=" . $card['link'] . " />" .
        "<div" .
        " class=\"card-img-overlay card_shadow rotatable_y_180_to_0 justify-content-center bg_color_21 overflow-auto rounded-0 p-1\">" .
        "<p class=\"card-text mx-2 my-3\">" . $card['description'] . "</p>" .
        "</div>" .
        "</div>" .
        "</div>"
    ?>