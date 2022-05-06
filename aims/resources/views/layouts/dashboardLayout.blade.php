<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <div class="d-flex">
        <div class="p-3" style="width: 320px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <span class="fs-5 fw-semibold">AIMS Dashboard</span>
              </a>

              <ul class="list-unstyled ps-0">
                <li class="mb-1">
                  <a href="adminDash" class="btn btn-toggle align-items-center">Dashboard</a>
                </li>

                <li class="mb-1">
                  <button class="btn btn-toggle align-items-center" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Database
                  </button>
                  <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-decoration-none">
                      <li><a href="{{ route('crop.index') }}" class="link-dark text-decoration-none ">Crop</a></li>
                      <li><a href="{{ route('seed.index') }}" class="link-dark text-decoration-none rounded">Seed</a></li>
                      <li><a href="{{ route('equipment.index') }}" class="link-dark text-decoration-none rounded">Equipment</a></li>
                      <li><a href="{{ route('livestock.index') }}" class="link-dark text-decoration-none rounded">Livestock</a></li>
                      <li><a href="{{ route('farmer.index') }}" class="link-dark text-decoration-none rounded">Farmers</a></li>
                      <li><a href="empData" class="link-dark text-decoration-none rounded">Employee List</a></li>
                    </ul>
                  </div>
                </li>

                <li class="mb-1">
                  <a href="/" class="btn btn-toggle align-items-center">Homepage</a>
                </li>

                <li class="border-top my-3"></li>

                <li class="mb-1">
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    Account
                  </button>
                  <div class="collapse" id="account-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="#" class="link-dark rounded">Profile</a></li>
                      <li><a href="adminAcctSett" class="link-dark rounded">Settings</a></li>
                      <li><a href="logout" class="link-dark rounded">Sign out</a></li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>
        </div>

        <div class="col">
            <div class="container">
                @if(session()->has('success'))
                    <div class="p-3 mb-2 bg-success text-white">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session()->has('failed'))
                    <div class="p-3 mb-2 bg-danger text-white">
                        {{ session('failed') }}
                    </div>
                @endif
            </div>

            @yield('content')
        </div>
    </div>


</body>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
