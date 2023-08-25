@extends('layouts.dashboard_template')

@section('content')
<section class="content-header">
    <h1>
        {{ $page_title ?? "Page Title" }}
        <small>{{ $page_description ?? '' }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('data.data-desa.index') }}">Data Desa</a></li>
        <li class="active">{{ $page_title }}</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            @include( 'partials.flash_message' )
            
            {{ html()->form('POST', route('data.data-desa.store'))->id('datadesa-ektp')->class('form-horizontal form-label-left')->open() }}

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

                    @include('data.data_desa.form_create')

                </div>
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
                {{ html()->form()->close() }}
            </div>
        </div>
    </div>
</section>
@endsection
@include('partials.asset_select2')
@push('scripts')
@include('partials.desa_select2')
<script>
    $(function () {

        $('#list_desa').change(function () {
            $("#desa_id").val($('#list_desa').val());
            $("#nama").val($('#list_desa option:selected').text());
        });
    })
</script>
@endpush