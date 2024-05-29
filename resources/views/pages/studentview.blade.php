<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Detail Siswa</title>

    <style>
        .glass-body {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(6.4px);
            -webkit-backdrop-filter: blur(6.4px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        body {
            background-image: url("https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=2832&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="" width="30" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12 col-12">
                <div class="glass-body p-3">
                    <div class="card">
                        <div class="card-body">

                            <h1 class="text-center text-success">
                                <img src="{{ asset('logo.png') }}" width="100">
                            </h1>
                            <p class="text-success text-center fw-bold">
                                Data Siswa Pondok Pesantren Panggung
                            </p>
                            @foreach ($data as $item)
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Nama Lengkap</span>
                                        <span>{{ $item->fullname }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Tempat, Tanggal Lahir</span>
                                        <span>{{ $item->placeofbirth }}, {{ $item->dateofbirth }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Agama</span>
                                        <span>{{ $item->religion }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Jenis Kelamin</span>
                                        <span>{{ $item->gender }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">NIK</span>
                                        <span>{{ $item->nik }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Status Pernikahan</span>
                                        <span>{{ $item->maritalstatus }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Kewarganegaraan</span>
                                        <span>{{ $item->citizenship }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Pendidikan</span>
                                        <span>{{ $item->education }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Mulai Mondok</span>
                                        <span>{{ $item->earlyentry }}</span>
                                    </div>
                                    <div class="col-12 mb-4 col-sm-4 align-items-center d-flex flex-column">
                                        <span class="fw-bold text-success">Nama Lengkap</span>
                                        <span>{{ $item->address }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="d-flex justify-content-between flex-column flex-lg-row">
                <small class="text-danger bg-light p-1 fw-light text-center">App Version 0.1.2</small>
                <small id="ip-address" class="text-danger p-1 bg-light fw-light text-center">Fetching IP
                    address...</small>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        async function getIPAddress() {
            try {
                let response = await fetch(
                    "https://api.ipify.org?format=json"
                );
                let data = await response.json();
                document.getElementById(
                    "ip-address"
                ).innerText = `Your IP Address: ${data.ip}`;
            } catch (error) {
                document.getElementById("ip-address").innerText =
                    "Unable to fetch IP address";
                console.error("Error fetching IP address:", error);
            }
        }

        // Call the function to get the IP address on page load
        window.onload = getIPAddress;
    </script>
</body>

</html>
