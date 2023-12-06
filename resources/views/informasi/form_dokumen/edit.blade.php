@extends('layouts.dashboard_template')

@section('content')
    <section class="content-header">
        <h1>
            {{ $page_title ?? 'Page Title' }}
            <small>{{ $page_description ?? '' }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('informasi.form-dokumen.index') }}">Daftar Dokumen</a></li>
            <li class="active">{{ $page_description ?? '' }}</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Oops!</strong> Ada kesalahan pada kolom inputan.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    <!-- form start -->
                    {{ html()->modelForm($dokumen, 'put', route('informasi.form-dokumen.update', $dokumen->id))->attributes(['id' => 'form-dokumen', 'class' => 'form-horizontal form-label-left', 'enctype' => 'multipart/form-data'])->open() }}

                    <div class="box-body">

                        @include('informasi.form_dokumen.form_edit')

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="pull-right">
                            <div class="control-group">
                                <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i>&nbsp; Batal</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                            </div>
                        </div>
                    </div>
                    {{ html()->closeModelForm() }}
                </div>
            </div>
        </div>
    </section>
@endsection
