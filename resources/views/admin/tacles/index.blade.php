@extends('layouts.admin_layouts')

@section('title','Все посты')


@section('content')



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Все снасти</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">

                <table class="table  projects">
                    <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            Название поста
                        </th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tacles as $tacle)
                    <tr>
                        <td>
                            {{ $tacle -> id }}
                        </td>
                        <td>
                            {{ $tacle -> title }}
                        </td>

                        <td class="text-center">
                            <a class="btn btn-warning btn-sm" href="{{route('option.edit',$tacle['id'])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Добавить опцию
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('tacles.edit',$tacle['id'])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>
                            <form method="Post" style="display: inline" action="{{route('tacles.destroy',$tacle['id'])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Удалить
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>
        <!-- /.card-body -->
    </div>



@endsection


