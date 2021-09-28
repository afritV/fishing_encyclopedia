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
        <form method="post" action="{{route('value.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Добавить значение.</label>
                    <div class="form-group">
                        <select name="option_id" class="form-control" required>

                            @foreach($values as $value)
                                <option value="{{$value -> id}}">{{$value -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Привязать к посту.</label>
                    <div class="form-group">
                        <select name="tackle_id" class="form-control" required>

                            @foreach($tackles as $tackle)
                                <option value="{{$tackle -> id}}">{{$tackle -> title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="value" class="form-control" placeholder="Введите название опции" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection


