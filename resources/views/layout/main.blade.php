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

    <title>Smilpy {{ $title }}</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>

<body>
    <div class="container-fluid">
        @include('layout.partials.navbar')
        <img src="img/Banner Smilpy.jpg" alt="" class="img-fluid background">
        <h4 class="fw-bold mb-2">Mau ke mana?</h4>
        <div class="container-fluid">
            <div class="row">
                <div class="input-group">
                    <div class="col-4 me-2">
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt-fill"></i></span>
                            <input type="text" class="form-control" placeholder="Cari berdasarkan tempat, kota, hotel" aria-label="Cari berdasarkan tempat, kota, hotel" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-2 order-1 me-">
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-event"></i></span>
                            <input type="date" class="form-control" placeholder="Tanggal" aria-label="Tanggal" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-2 order-1 me-2">
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-event"></i></span>
                            <input type="date" class="form-control" placeholder="Tanggal" aria-label="Tanggal" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-3 order-2 me-2">
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="number" id="number" class="form-control" aria-describedby="basic-addon1" placeholder="Jumlah tamu">
                        </div>
                    </div>

                    <div class="col-auto order-3 me-2">
                        <button type="button" class="btn btn-primary rounded-circle"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container-fluid">
        @yield('container')
    </div>

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
