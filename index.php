<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Discovering Bootstrap 5.2.2</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Photos</a></li>
                        <li><a class="dropdown-item" href="#">Articles</a></li>
                        <li><a class="dropdown-item" href="#">Projects</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5 mb-5">
            <h1 class="fs-2 text-break d-flex justify-content-xxl-center justify-content-lg-center justify-content-sm-center">Journey into Bootstrap Classes :</h1>
        </div>
        <div class="container">
            <div class="align_cards row justify-content-around ">
                <div class="card mt-5" style="width: 18rem;">
                        <img src="assets/PA1_rando-kayak.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mt-5" style="width: 18rem;">
                        <img src="assets/cascade.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mt-5" style="width: 18rem;">
                        <img src="assets/Grand-Canyon.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card mt-5" style="width: 18rem;">
                        <img src="assets/field.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p class="fs-3 mt-5 text-break d-flex justify-content-xxl-center justify-content-lg-center justify-content-sm-center">The css framework are very useful</p>
            <p class="fs-6 mt-1 text-break d-flex justify-content-xxl-center justify-content-lg-center justify-content-sm-center">Learning them comes with practices</p>
        </div>
    </main>
    <footer>
        <div class="bg-primary m-0 p-0">
            <p class="g-0 text-white fs-5 m-0 p-0 text-center">2022 wilders | images @picsum</p>
        </div>
    </footer>
</body>
</html>