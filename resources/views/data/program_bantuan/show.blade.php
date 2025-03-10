@extends('layouts.dashboard_template')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{ $page_title ?? "Page Title" }}
        <small>{{ $page_description ?? '' }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('data.program-bantuan.index') }}">Program Bantuan</a></li>
        <li class="active">{{ $page_title }}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    @include('partials.flash_message')

    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="">
                <a href="{{ route('data.program-bantuan.create-peserta', $program->id) }}">
                    <button type="button" class="btn btn-primary btn-sm" title="Tambah Peserta"><i class="fa fa-plus"></i>
                        Tambah Peserta
                    </button>
                </a>
            </div>
        </div>
        <div class="box-body">
            @include( 'flash::message' )
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-condensed">
                        <tr>
                            <th class="col-md-2">Nama</th>
                            <td>{{ $program->nama }}</td>
                        </tr>
                        <tr>
                            <th>Sasaran</th>
                            <td>{{ $sasaran[$program->sasaran] }}</td>
                        </tr>
                        <tr>
                            <th>Periode Program</th>
                            <td>{{ $program->start_date }} - {{ $program->end_date }}</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>{{ $program->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <legend>Daftar Peserta Program</legend>
            <table class="table table-bordered table-hover dataTable no-footer" id="program-table">
                @if($program->sasaran == 1)
                    <thead>
                    <tr>
                        <th style="max-width: 150px;" rowspan="2" valign="center">No</th>
                        <th rowspan="2">NIK</th>
                        <th rowspan="2">No. Kartu Peserta</th>
                        <th rowspan="2">Nama Peserta</th>
                        <th rowspan="2">Alamat</th>
                        <th colspan="5" class="text-center">Identitas di Kartu Peserta</th>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                    </tr>
                    </thead>
                @else
                    <thead>
                    <tr>
                        <th style="max-width: 150px;" rowspan="2" valign="center">Aksi</th>
                        <th rowspan="2">No. KK</th>
                        <th rowspan="2">No. Kartu Peserta</th>
                        <th rowspan="2">Kepala Keluarga</th>
                        <th rowspan="2">Alamat</th>
                        <th colspan="5" class="text-center">Identitas di Kartu Peserta</th>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                    </tr>
                    </thead>
                @endif
                <tbody>
                @if(count($peserta) > 0)
                    @foreach($peserta as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->peserta  }}</td>
                        <td>{!! $row->kartu_peserta !!}</td>
                        <td>{!! $row->penduduk->nama !!}</td>
                        <td>{!! $row->penduduk->alamat !!}</td>
                        <td>{!! $row->kartu_nik !!}</td>
                        <td>{!! $row->kartu_nama!!}</td>
                        <td>{!! $row->kartu_tempat_lahir!!}</td>
                        <td>{!! $row->kartu_tanggal_lahir!!}</td>
                        <td>{!! $row->kartu_alamat!!}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="10" class="dataTables_empty">Tidak ada peserta.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection

