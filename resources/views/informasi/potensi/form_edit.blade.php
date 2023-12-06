<div class="form-group">
    <label for="kategori_id" class="control-label col-md-4 col-sm-3 col-xs-12">Kategori<span class="required">*</span></label>
    <div class="col-md-5 col-sm-5 col-xs-12">
        {{ html()->select('kategori_id', \App\Models\TipePotensi::pluck('nama_kategori', 'id'))->attributes(['placeholder' => '-Pilih', 'class' => 'form-control', 'id' => 'kategori_id', 'required']) }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-3 col-xs-12">Nama Potensi <span class="required">*</span></label>
    <div class="col-md-5 col-sm-5 col-xs-12">
        {{ html()->text('nama_potensi')->attributes(['class' => 'form-control', 'placeholder' => 'Nama Potensi', 'required']) }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-3 col-xs-12">Deskripsi <span class="required">*</span></label>
    <div class="col-md-5 col-sm-5 col-xs-12">
        {{ html()->textarea('deskripsi')->attributes(['class' => 'form-control', 'placeholder' => 'Deskripsi', 'required']) }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-3 col-xs-12">Lokasi <span class="required">*</span></label>
    <div class="col-md-5 col-sm-5 col-xs-12">
        {{ html()->text('lokasi')->attributes(['class' => 'form-control', 'placeholder' => 'Lokasi', 'required']) }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-3 col-xs-12">Gambar</label>
    <div class="col-md-5 col-sm-6 col-xs-12">
        <input type="file" name="file_gambar" id="file_gambar" class="form-control" accept="image/*">
        <br>
        <img src="@if (!$potensi->file_gambar == '') {{ asset($potensi->file_gambar) }} @else {{ 'http://placehold.it/1000x600' }} @endif" id="showgambar" style="max-width:400px;max-height:250px;float:left;" />
    </div>
</div>

<div class="ln_solid"></div>

@include('partials.asset_jqueryvalidation')

@push('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\PotensiRequest', '#form-potensi') !!}
@endpush
