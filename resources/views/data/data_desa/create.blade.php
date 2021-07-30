@extends('layouts.dashboard_template')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{ $page_title ?? "Page Title" }}
        <small>{{ $page_description ?? '' }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard.profil')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('data.data-desa.index')}}">{{ $page_title }}</a></li>
        <li class="active">{{ $page_description ?? '' }}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    @include( 'partials.flash_message' )
    <div class="box box-primary">
        
        <!-- form start -->
        {!! Form::open(['route' => 'data.data-desa.store', 'method' => 'post', 'id' => 'datadesa-ektp', 'class' => 'form-horizontal form-label-left']) !!}
        
            <div class="box-body">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> Ada yang salah dengan inputan Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @include('data.data_desa.form')

            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <div class="pull-right">
                    <div class="control-group">
                        <a href="{{ route('data.data-desa.index') }}">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Batal
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>

        {!! Form::close() !!}

    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection