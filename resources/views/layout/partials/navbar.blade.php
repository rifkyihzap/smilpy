<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>Smilpy | {{ $post->title }}</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-3 bg-body rounded">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">
                <img src="/img/smilpy.png" alt="LOGO" width="140" height="70" class="d-inline-block align-text-top img-fluid">
            </a>
            <ul class="navbar-nav">

                @auth
                <span class="border border-3 rounded-pill">
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"  href="/dashboard">Menjadi tuan rumah di Smilpy</a>
                    </li>
                </span>
                <li class="nav-item">
                    <a class="nav-link active fs-6" href="/dashboard"><i class="bi bi-menu-button-wide-fill me-1"></i>Pesanan Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fs-6" href="/dashboard"><i class="bi bi-person-circle me-1"></i>{{ auth()->user()->name }}</a>
                </li>
                <form action="/logout" method="post">
                    @csrf
                    <li class="nav-item">
                        <button type="submit" class="btn btn-link text-dark">
                            <i class="bi bi-box-arrow-left me-1"></i>Log out
                        </button>
                    </li>
                </form>
                @else
                <li class="nav-item">
                    <a class="nav-link active fs-6" href="/login"><i class="bi bi-box-arrow-right me-1"></i>Log In</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>