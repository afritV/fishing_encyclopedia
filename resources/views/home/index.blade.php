@extends('layouts.home_layouts')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container">
        <!-- Content Header (Page header) -->
{{--        <section class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h6>Fixed Layout</h6>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item"><a href="#">Layout</a></li>--}}
{{--                            <li class="breadcrumb-item active">Fixed Layout</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}

        <!-- Main content -->
        <section class="content mt-3">

            <div class="container-fluid">
                <div class="row">
                    @foreach($tacles as $tacle)
                    <div class="col-6">
                        <!-- Default box -->

                            <div class="card-user card">
                                <div class="card-header">
                                    <h3 class="card-title">{{$tacle -> title}}</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <img class="img-post" src="{{$tacle -> img}}" alt="{{$tacle -> title}}">
                                    <div class="description">

                                       {!! $tacle -> text !!}


                                    </div>
                                    <div class="btn_wrapper text-right">
                                        <a href="{{route('show.tacles', $tacle->id)}}" class="btn mt-3 btn-lg btn-primary me-6">Подробнее</a>
                                    </div>
                                </div>


                            </div>


                        <!-- /.card -->
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


