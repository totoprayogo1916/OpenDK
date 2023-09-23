@extends('layouts.dashboard_template')

@section('content')
    <section class="content-header">
        <h1>
            {{ $page_title ?? 'Page Title' }}
            <small>{{ $page_description ?? '' }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('informasi.artikel.index') }}">Daftar Artikel</a></li>
            <li class="active">{{ $page_description }}</li>
        </ol>
    </section>

    <section class="content container-fluid">

        {{ html()->form('post', route('informasi.artikel.store'))->attributes(['enctype' =>'multipart/form-data'])->open()}}

        @include('informasi.artikel._form')

        {{ html()->form()->close() }}

    </section>
@endsection
