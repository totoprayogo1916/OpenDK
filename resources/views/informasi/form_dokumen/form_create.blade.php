<div class="form-group">
    <label class="control-label col-md-4 col-sm-3 col-xs-12">Nama Dokumen<span class="required">*</span></label>
    <div class="col-md-5 col-sm-5 col-xs-12">
        {!! Form::text('nama_dokumen', null, ['class' => 'form-control', 'placeholder' => 'Nama Dokumen', 'required']) !!}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-4 col-sm-3 col-xs-12">File Dokumen <span class="required">*</span></label>
    <div class="col-md-5 col-sm-5 col-xs-12">
        <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" accept="jpeg,png,jpg,gif,svg,xlsx,xls,doc,docx,pdf,ppt,pptx" required>
    </div>
</div>
<div class="ln_solid"></div>

@include('partials.asset_jqueryvalidation')

@push('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\DokumenRequest', '#form-dokumen') !!}
@endpush
