<?php

$html = '<ul>';

foreach($series as $serie){
    $html .= "<li>$serie</li>";
}

$html .= '</ul>';

echo $html;

?>