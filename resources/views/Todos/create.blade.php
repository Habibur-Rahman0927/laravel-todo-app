@extends('layouts.app')


@section('title')
    Create Todo
@endsection

@section('content')
    <h1 class="text-center my-5">Create Todo</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Todos</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                        {{$error}}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                       <form action="/store-todo" method="POST">
                        @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea name="description" rows="5" cols="5" class="form-control"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="btncheck1">Is Completed</label>
                                <input type="checkbox" id="btncheck1" name="completed">
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Create Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection