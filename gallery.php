<?php
    $_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="gallery.php"><img src="img/logo-hor.png" class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <h2>GALLERY</h2>
                <div class="gallery-container">
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                if(isset($_SESSION['username'])){
                    echo '
                    <div class="col-md-4 text-center">
                        <h3>Upload</h3>
                        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data" class="my-3">
                            <div class="form-group">
                                <input type="text" name="filename" placeholder="File name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="filetitle" placeholder="Image title" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="filedesc" placeholder="Image description" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="file" name="file"  class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Upload</button>
                        </form>
                    </div>';
                }    
            ?>
        </div>
    </div>
    <footer class="bg-light mt-5">
        <div class="text-center py-3">
            <a href="#" class="mt-2">Portfolio - Marcos Arreguín</a>
        </div>
    </footer>

</body>
</html>