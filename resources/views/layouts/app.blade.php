
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task - @yield('title')</title>
    <script src="sweetalert2.all.min.js"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Task</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('mechanics.index')}}">Mechanic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('cars.index')}}">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('owners.index')}}">Owner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('contacts.index')}}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

