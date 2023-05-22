@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="card bg-black text-white" style="width: 18rem;">
            <img class="card-img-top" src="{{$project->preview_image}}" alt="{{$project->title}}">
            <div class="card-body">
              <p class="card-text"><span class="font-weight-bold"> Titolo:</span> <br>{{$project->title}}</p>
              <p class="card-text"><span class="font-weight-bold">Descrizione:</span> <br>{{$project->description}}</p>
              <p class="card-text"><span class="font-weight-bold">Link del Progetto:</span> <br>{{$project->link}}</p>
            </div>
          </div>


    </div>

</div>
@endsection
