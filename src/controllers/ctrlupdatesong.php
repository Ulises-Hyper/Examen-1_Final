<?php

function ctrlupdatesong($request, $response, $container)
{
    $id = $request->get(INPUT_POST, 'song_id');
    $song_name = $request->get(INPUT_POST, 'song_name');
    $artist = $request->get(INPUT_POST, 'artist');

    $songModel = $container->Songs();

    $currentsong = $songModel->getSongById($id);
    
    if (!$currentsong) {
        $response->redirect("Location: index.php?msg=cancion_no_encontrada");
        return $response;
    }

    $song_name = $song_name ?: $currentsong['song_name'];
    $artist = $artist ?: $currentsong['artist'];

    if (!empty($_FILES['song']['tmp_name'])) {
        $uploadDir = 'uploads/';
        $song_path = $uploadDir . basename($_FILES['song']['name']);
        if (!move_uploaded_file($_FILES['song']['tmp_name'], $song_path)) {
            $response->redirect("Location: index.php?msg=error_subiendo_archivo");
        }
    } else {
        $song_path = $currentsong['song_path'];
    }

    $updateSuccess = $songModel->updateSong($id, $song_name, $artist, $song_path);

    if ($updateSuccess) {
        $response->setHeader("Location: index.php?");
    } else {
        $response->setHeader("Location: index.php?msg=error_al_actualizar");
    }
    return $response; 
}
