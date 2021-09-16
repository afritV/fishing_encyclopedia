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
        <form method="post" action="{{route('subcategory.update', $subcategory -> id )}}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Выбрать подкатегорию</label>
                    <select name="category_id" class="form-control" required>

                        @foreach($categories as $category)
                            <option value="{{$category -> id}}">{{$category -> title}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label >Добавить подкатегорию</label>
                    <input type="text" name="title" class="form-control"  placeholder="Введите название подкатегории" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection


