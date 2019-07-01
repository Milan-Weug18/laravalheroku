@extends('layouts.app')

@section('content')
<div class="container">

   <div class="card" style="margin-top: 20px;">
            <div class="card-body">
              <h3>Toets</h3>
              <hr>
               <a href="{{route('toets.create') }}">Toets maken</a>
              <div class="card">
      <div class="card-header">
      


      <form method="post" action="{{ route('toets.store') }}">
         {{ csrf_field() }}

                <div class="form-group {{ $errors->has('docent') ? 'has-error' : '' }}">
                    
                    <label for="name"><b>Docent</b></label>
                    <input type="text" class="form-control" name="docent" required />
                    <span class="text-danger">{{ $errors->first('docent') }}</span>
                </div>
                <div class="form-group {{ $errors->has('vak') ? 'has-error' : '' }} ">
                    <label for="price"><b>Vak</b></label>
                    <input type="text" class="form-control" name="vak" required  />
                    <span class="text-danger">{{ $errors->first('vak') }}</span>
                </div>
                <div class="form-group {{ $errors->has('tijd') ? 'has-error' : '' }}">
                    <label for="quantity"><b>Tijd</b></label>
                    <input type="text" class="form-control" name="tijd"    required  />
                    <span class="text-danger">{{ $errors->first('tijd') }}</span>
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
</div>

</div>


@endsection