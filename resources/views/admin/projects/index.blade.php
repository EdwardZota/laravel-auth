@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <table class="table table-hover table-striped table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">Progetto</th>
                <th scope="col">Titolo</th>
                <th scope="col">preview</th>
                <th scope="col">azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{$project->id}}</th>
                        <td>{{$project->title}}</td>
                        <td>{{$project->preview_image}}</td>
                        <td class="d-flex">
                            <div class="me-2">
                                <a href="{{route('admin.projects.show',['project'=>$project->id])}}" class="btn btn-primary ">Info</a>

                            </div>
                            <form action="{{route('admin.projects.destroy',['project'=>$project->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
