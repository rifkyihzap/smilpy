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

    <title>Smilpy | {{ $title }}</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
        cursor: pointer;
    }

    #text {
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-3 bg-body rounded">
        <div class="container-fluid">

            <a class="navbar-brand fs-4 fw-bold" href="/">
                <img src="img/logo.png" alt="LOGO" width="30" height="30" class="d-inline-block align-text-top"> Smilpy
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fs-6" aria-current="page" href="/">Menjadi Rekanan Smilpy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fs-6" href="/"><i class="bi bi-menu-button-wide-fill me-2"></i>Pesanan Saya</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active fs-6" href="/register"><i class="bi bi-person-circle me-2"></i>Log In</a>
                </li>


                <div id="overlay" onclick="off()">
                    <div id="text">Belum Jadi Tabel Daftar</div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" onclick="on()">Daftar</button>
                </div>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function on() {
            document.getElementById("overlay").style.display = "block";
        }

        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>
</body>

</html>