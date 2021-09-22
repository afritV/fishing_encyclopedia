@extends('layouts.admin_layouts')

@section('title','Добавить подкатегорию')


@section('content')

    <div class="card card-primary">
        @if(session('success'))

            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden=""></button>
                <h4><i class="icon fa fa-check"> {{ session('success') }}</i></h4>
            </div>
    @endif
    <!-- form start -->
        <form method="post" action="#">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Выбрать пост</label>
                    <select name="category_id" class="form-control" required>

                        @foreach($posts as $post)
                            <option value="{{$post -> id}}">{{$post -> title}}</option>
                        @endforeach

                    </select>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label >Заполнить дополнительные опции</label>--}}
{{--                    @foreach($options as $option)--}}
{{--                        <input type="text" value="{{$opti->name}}" name="name" class="form-control"  required>--}}
{{--                        <input type="text" value="{{$opti->value}}" name="name" class="form-control"  required>--}}
{{--                        <br>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection


