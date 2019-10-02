@extends('layouts.app')

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
                    <th scope="col"><b>Informatie</b></th>
                  </tr>
                </thead>
                <tbody>
                  
                 @foreach ($toets as $toetss)
                  <tr>
                    <th scope="row">{{ $toetss->id }}</th>
                    <td>{{ $toetss->docent }}</td>
                    <td>{{ $toetss->vak }}</td>
                    <td>{{ $toetss->tijd }}</td>
                    <td>{{ $toetss->description }}</td>
                    <td><a class="btn btn-primary" href="{{route('toets.destroy', $toetss->id)}}">Details</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


@endsection

