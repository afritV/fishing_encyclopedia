@extends('layouts.admin_layouts')

@section('title','Добавить категорию')


@section('content')
    <div class="card card-primary">
        @if(session('success'))

            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden=""></button>
                <h4><i class="icon fa fa-check"> {{ session('success') }}</i></h4>
            </div>
        @endif
        <!-- form start -->
        <form method="post" action="{{route('category.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label >Добавить категорию</label>
                    <input type="text" name="title" class="form-control"  placeholder="Введите название категории" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection


