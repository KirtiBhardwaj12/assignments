<?php

    $title = "lasdkhfosdifjljlflkdfhlasdfkhdslfkskijasodjfiekofasldifodsjf";
    if(strlen($title) > 50){
        echo "your title exceeding character limit<br>";
        $title = substr($title,0, 50);
        echo "your truncated title is => ", $title;
    } else {
        echo"title limit ok!!";
    }

 ?>
