<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Toetsing')</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    


<body style="background: #cfcfcf;">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/input">Assignments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link float-right" href="/toets">Toets</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">

   <div class="card" style="margin-top: 20px;">
            <div class="card-body">
              <h3>Assignments</h3>
              <hr>
               <a href="{{route('toets.create') }}">Maak Toets </a>
              <div class="card">
      <div class="card-header">
                    <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Voornaam</th>
                    <th scope="col">Achternaam</th>
                    <th scope="col">Rol</th>
                  </tr>
                </thead>
                <tbody>
                  
                <!--  @foreach ($input as $inputs)
                  <tr>
                    <th scope="row">{{ $inputs->id }}</th>
                    <td>{{ $inputs->firstname }}</td>
                    <td>{{ $inputs->lastname }}</td>
                    <td>{{ $inputs->title }}</td>
                    <td><a class="btn btn-primary" href="{{route('input.show', $inputs->id) }}">Details</a></td>
                  </tr>
                  @endforeach -->
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
</div>

</div>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

</html>



