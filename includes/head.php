<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body style="padding-top: 58px;">
    <header class="row-auto">
        <!-- place navbar here -->
        <nav class="navbar navbar-dark bg-dark fixed-top justify-content-center">
            <div class="container-fluid justify-content-evenly">
                <div class="col d-flex">
                    <a class="navbar-brand col-auto" href="#">FIVE</a>
                    <form class="d-flex col-auto d-sm-flex d-none">
                        <input class="form-control me-2 col" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success col-auto" type="submit">
                            Search
                        </button>
                    </form>
                </div>
                <div class="col-auto d-lg-none">
                    <button class="navbar-toggler profile-button rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="padding: 0 0px;">
                        <i class="bi bi-person-circle" style="font-size: 2rem;"></i> <!-- Profile Icon -->
                    </button>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Profile </h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col text-center p-5">
                                    <div class="rounded-circle overflow-hidden mx-auto shadow-lg mb-5" style="display: flex; justify-content: center;align-items: center;">
                                        <img class="img-fluid" src="https://via.placeholder.com/200" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover" />
                                    </div>
                                    <h2 class="mt-3">NAME</h2>
                                    <p>BIO</p>
                                    <a name="" id="" class="btn btn-primary btn-outline-light border-0" href="#">Profile</a>
                                    <a name="" id="" class="btn btn-primary btn-outline-light border-0 rounded-circle" href="#">
                                        <i class="bi bi-plus"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="d-flex col d-sm-none p-3 pb-0">
                <input class="form-control me-2 col" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success col-auto" type="submit">
                    Search
                </button>
            </form>
        </nav>
    </header>
