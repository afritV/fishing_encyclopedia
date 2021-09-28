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

        <form method="post" action="{{route('option.update', $option->id)}}">
            @csrf
            @method('PUT')
{{--            <div class="card-body">--}}
{{--                <div class="form-group">--}}
{{--                    <label>Название</label>--}}
{{--                    <input type="text" name="name" value="{{$option['name']}}">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="name_option">Значение</label>--}}
{{--                    <input type="text" name="value" value="{{$option['value']}}">--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <button type="submit" class="btn btn-primary">Добавить</button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>
@endsection


{{--@foreach($categories as $category)--}}
{{--    <option value="{{$category -> id}}">{{$category -> title}}</option>--}}
{{--    @if(count($category->subcategories)>0)--}}
{{--        @foreach($category->options as $option)--}}
{{--            <option value="{{$option -> id}}">&nbsp;&nbsp;{{$option -> name}}</option>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--@endforeach--}}
