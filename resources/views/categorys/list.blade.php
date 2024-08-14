<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <title>Talabalar</title>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="http://127.0.0.1:8000/Talabalar"><h3>KIUT</h3></a>
            <div class="d-flex justify-content-end">
                <form class="d-flex" action="http://127.0.0.1:8000/Kirish">
                    <button class="btn btn-outline-danger" type="submit">Chiqish</button>
                </form>

            </div>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </nav>
        <div id="layoutSidenav">
            @include('layouts.menu')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 display-flex justify-between">
                        <h1 class="mt-4">Yo`nlishlar</h1>
                        <a href="/category/add" class="btn btn-primary">Qo`shish</a>
                        <div class="searchBox">
                        </div>
                    <div>
                    <hr class="border border-primary border-3 opacity-75">


                </main>
                @include('layouts.footer')
            </div>
        </div>
        </div>
    </body>
</html>
<h1>
    Test
</h1>
