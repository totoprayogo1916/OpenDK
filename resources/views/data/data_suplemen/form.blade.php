<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sasaran">Sasaran Data</label>
    
    <div class="col-md-6 col-sm-6 col-xs-12">
        {{ html()->select('sasaran', ['1' => 'Penduduk', '2' => 'Keluarga/KK'])->class('form-control') }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Data Suplemen <span class="required">*</span></label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {{ html()->text('nama')->attributes(['placeholder' => 'Nama Data Suplemen','class' => 'form-control', 'required']) }}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {{ html()->textarea('keterangan')->attributes(['class' => 'textarea', 'placeholder' => 'Keterangan', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) }}
    </div>
</div>
<div class="ln_solid"></div>
