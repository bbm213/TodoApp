@extends('Layout.app')

@section('title','All Todos')

@section('content')
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="card" style="width: 50%">
                    <div class="card-header text-center">
                        <h1>All todos</h1> 
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="list-group">
                        @forelse ($todos as $todo)
                            <li class="list-group-item text-muted">
                                {{$todo->title}}
                                <span class="float-right">
                                <a href="/todos/{{$todo->id}}/delete">
                                       <i class="fa fa-trash-o" aria-hidden="true" style="color: #7e9ff8"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                <a href="/todos/{{$todo->id}}">
                                       <i class="fa fa-eye mr-2" aria-hidden="true" style="color: #e3342f"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                    <a href="/todos/{{$todo->id}}/edit">
                                       <i class="fa fa-edit mr-2" aria-hidden="true" style="color: #380079"></i>
                                    </a>
                                </span>
                                @if (!$todo -> completed)
                                <span class="float-right">
                                    <a href="/todos/{{$todo->id}}/complete">
                                       <i class="fa fa-check-square mr-2" aria-hidden="true" style="color: #23b41e"></i>
                                    </a>
                                </span>
                                @endif
                            </li>
                            @empty
                                <p class="text-center">No todos ready</p>
                        @endforelse
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
