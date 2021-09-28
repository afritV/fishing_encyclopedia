@extends('layouts.admin_layouts')

@section('title','Добавить статью')


@section('content')
    <div class="card card-primary">
        @if(session('success'))

            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden=""></button>
                <h4><i class="icon fa fa-check"> {{ session('success') }}</i></h4>
            </div>
        @endif
        <!-- form start -->
        <form method="post" action="{{route('tacles.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label >Добавить статью</label>
                    <input type="text" name="title" class="form-control"  placeholder="Введите название статьи" required>
                </div>

                <div class="form-group">
                    <label>Выбрать категорию</label>
                    <select name="cat_id" class="form-control" required>

                        @foreach($categories as $category)
                            <option value="{{$category -> id}}">{{$category -> title}}</option>
{{--                            @if(count($category->subcategories)>0)--}}
{{--                                @foreach($category->options as $option)--}}
{{--                                    <option value="{{$option -> id}}">&nbsp;&nbsp;{{$option -> name}}</option>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="editor" name="text"></textarea>
                </div>

                <div class="form-group">
                    <label for="feature_image">Изображение статьи</label>
                    <img src="" alt="" style="display: block; width: 100px; margin: 20px" class="img_uploaded">
                    <input type="text" name="img" id="feature_image" name="feature_image" value="" readonly>

                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>




    </div>
@endsection


