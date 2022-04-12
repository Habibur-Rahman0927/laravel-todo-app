
@extends('layouts.app')

@section('title')
    single Todo
@endsection

@section('content')
    <h1 class="text-center my-5">Single Todo</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h3 class="list-group-item">
                                    {{$todo->name}}
                                </h3>
                                {{$todo->description}}
                                {{-- <button 
                                    class="btn-sm btn-primary float-end">
                                    view
                                </button> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection