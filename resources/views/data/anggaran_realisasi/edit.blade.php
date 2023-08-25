@extends('layouts.dashboard_template')

@section('content')
<section class="content-header">
    <h1>
        {{ $page_title ?? "Page Title" }}
        <small>{{ $page_description ?? '' }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('data.anggaran-realisasi.index') }}">Daftar Anggaran & Realisasi</a></li>
        <li class="active">{{ $page_description ?? '' }}</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include('partials.flash_message')

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Oops!</strong> Ada kesalahan pada inputan Anda..<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- form start -->
            {{ html()->modelForm($anggaran, 'PUT', route(['data.anggaran-realisasi.update', $anggaran->id]))->id('form-anggaran')->class('form-horizontal form-label-left')->open() }}

            <div class="box-body">

                @include('data.anggaran_realisasi.form_edit')

            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <div class="pull-right">
                    <div class="control-group">
                        <a href="{{ route('data.anggaran-realisasi.index') }}">
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Batal</button>
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </div>

            {{ html()->closeModelForm() }}
            
        </div>
    </div>
</section>
@endsection