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
        <a class="nav-link" href="/input">Assignments</a>
      </li>
    </ul>
  </div>
</nav>




<div class="container">


    <div class="card" style="margin-top: 20px;">
            <div class="card-body">
              <h3>Show Assignment</h3>
              <div class="card">
      <div class="card-header">
        <div class="d-flex">
        {{--Column 1--}}
        <div class="flex-fill">
            <div class="d-flex flex-column mb-3">
                <h5>Assignment Details</h5>
                <h6 class="font-weight-bolder">Voornaam</h6>
                {{$input->firstname}}
                <hr>
                <h6 class="font-weight-bolder mt-3">Achternaam</h6>
                <a href="{{url('/input')}}/{{$input->lastname}}">{{$input->lastname}}</a>
                <hr>
                <h6 class="font-weight-bolder">Titel</h6>
                <a href="{{url('/input')}}/{{$input->title}}">{{$input->title}}</a>
                <hr>
                <h6 class="font-weight-bolder">Description</h6>
                {{$input->description}}
            </div>
            </div>
          </div>
        </div>

        <div class="card-header">
            <button class="btn btn-sm btn-danger float-right font-weight-bolder" type="submit" data-toggle="modal" data-target="#confirm_modal" tabindex="2"><i class="fas fa-trash"></i>Assignment verwijderen</button>
            <a class="btn btn-sm btn-info float-right mr-2 text-white font-weight-bolder" href="{{route('input.edit', $input->id) }}"><i class="fas fa-pen" tabindex="1"></i>Bewerken</a>
        </div>


      </div>
    </div>
  </div>
</div>

<!-- Modal -->
    <div class="modal fade" id="confirm_modal" tabindex="-1" role="dialog" aria-labelledby="modal_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label">Weet je zeker dat je {{$input->firstname}} wilt verwijderen?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Sluiten">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
                    <form class="form-inline float-right" action="#" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-success">Bevestigen</button>
                    </form>
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



