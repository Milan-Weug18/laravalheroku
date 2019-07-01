@section('content')

@section('content')
<div class="container">

   <div class="card" style="margin-top: 20px;">
            <div class="card-body">
              <h3>Toets</h3>
              <hr>
               <a href="{{route('toets.create') }}">Maak Toets </a>
              <div class="card">
      <div class="card-header">
                    <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Docent</th>
                    <th scope="col">Vak</th>
                    <th scope="col">Tijd</th>
                    <th scope="col">Beschrijving</th>
                  </tr>
                </thead>
                <tbody>
                  
               
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


@endsection