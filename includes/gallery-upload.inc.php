<?php

    if(isset($_POST['submit'])){
        $newFileName = $_POST['filename'];
        if(empty($_POST['filename'])){
            $newFileName = 'Gallery';
        }
        else{
            // si el nombre del archivo tiene demasiados espacios lo haremos mas pequeño
            $newFileName = strtolower(str_replace(" ", "-", $newFileName));
        }

        $imageTitle = $_POST['filetitle'];
        $imageDesc = $_POST['filedesc'];

        $file = $_FILES['file'];

        
        
    }