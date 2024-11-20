<?php

function ctrldeletesong($song){
    if (isset($_GET['id'])){
        $id = (int)$_GET["id"];

        $song->deleteSong($id);
        
        header(header: "Location: index.php?deleted=$id");
        exit;
    } else {
        header("Location: index.php?error=invalid_id");
        exit;
    }
}