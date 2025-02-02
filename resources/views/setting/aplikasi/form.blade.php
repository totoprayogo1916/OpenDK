{{ Form::hidden('id', $aplikasi->id) }}

<div class="form-group">
    <label for="key" class="control-label col-md-4 col-sm-3 col-xs-12">Judul</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('key', null, ['class' => 'form-control', 'id' => 'key', 'readonly' => true]) !!}
    </div>
</div>

<div class="form-group">
    <label for="value" class="control-label col-md-4 col-sm-3 col-xs-12">Isi</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        @if ($aplikasi->type == 'textarea')
            {!! Form::textarea('value', null, ['class' => 'form-control', 'required' => true, 'id' => 'value']) !!}
        @elseif ($aplikasi->type == 'number')
            {!! Form::number('value', null, ['class' => 'form-control', 'required' => true, 'id' => 'value']) !!}
        @else
            {!! Form::text('value', null, ['class' => 'form-control', 'required' => true, 'id' => 'value']) !!}
        @endif
        <small></small>
    </div>
</div>

<div class="form-group">
    <label for="description" class="control-label col-md-4 col-sm-3 col-xs-12">Deskripsi</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 5, 'readonly' => true]) !!}
    </div>
</div>

<div class="form-group">
    <label for="kategori" class="control-label col-md-4 col-sm-3 col-xs-12">Kategori</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('kategori', null, ['class' => 'form-control', 'id' => 'kategori', 'readonly' => true]) !!}
    </div>
</div>

<div class="ln_solid"></div>
