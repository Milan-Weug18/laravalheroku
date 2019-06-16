<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MyPortfolio Site')</title>

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
        <a class="nav-link" href="#">Assignment</a>
    </ul>
  </div>
</nav>





<div class="container">
  <div class="card" style="margin-top: 20px;">
            <div class="card-body">
              <h3>Create Assignment</h3>

              <div class="card">


    <div class="card-header">
      <form method="post" action="{{ route('input.store') }}">
         {{ csrf_field() }}

                <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                    
                    <label for="name"><b>Voornaam</b></label>
                    <input type="text" class="form-control" name="firstname" required />
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                </div>
                <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }} ">
                    <label for="price"><b>Achternaam</b></label>
                    <input type="text" class="form-control" name="lastname" required  />
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                </div>
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="quantity"><b>Titel</b></label>
                    <input type="text" class="form-control" name="title"    required  />
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label for="quantity"><b>Beschrijving</b></label>
                    <input type="text" class="form-control" name="description" style="height: 100px"; />
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
                <button type="submit" class="btn btn-success float-right">Opslaan</button>
            </form>

             </div>
           </div>
         </div>
       </div>

     @if(count($errors))
      <div class="alert alert-danger">
        <strong>Error</strong>: Controlleer de gegevens en probeer het opnieuw.
        <br/>
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
   </div>
</div>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

</html>



