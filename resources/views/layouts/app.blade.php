<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY BUSINESS</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>


  <nav class="navbar navbar-expand-sm navbar-light bg-success">
      <div class="container">
        <a class="navbar-brand" href="#">MY BUSINESS</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('supplier.index') }}">SUPPLIER</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('purchase.index') }}">PURCHASE</a>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('purchase.index') }}" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PURCHASE</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('purchase.index') }}">PURCHASES</a>
                        <a class="dropdown-item" href="{{ route('purchase.create') }}">NEW PURCHASE</a>
                        <a class="dropdown-item" href="#">SEARCH</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('visas.index') }}">VISA</a>
                </li>

            </ul>
        </div>
    </div>
  </nav>


<div class="container">

    @component('components.session-msg')

    @endcomponent

    @yield('content')

</div>



@livewireScripts
<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
