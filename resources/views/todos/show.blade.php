
@extends('Layout.app')

@section('title','Todo -'. $todo->id)

@section('content')       
       <div class="container">
           <h1 class="mt-5 text-center">{{$todo->title}}</h1>
       </div>
       <div class="row pt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span>Details</span>
                        <span class="bdage badge-warning float-right">{{boolval($todo->completed) ? 'Completed' : 'Non Completed'}}</span>
                    </div>
                    <div class="card-body">
                        {{$todo->description}}
                    </div>
            </div>
       </div>
@endsection