<div class="form-group">
    <label for="website" class="control-label col-md-4 col-sm-3 col-xs-12">Kode / Nama Desa <span class="required">*</span></label>
    <div class="col-md-2 col-sm-2 col-xs-12">
        <input id="desa_id" class="form-control" placeholder="00.00.00.0000" type="text" readonly value="{{ $desa->desa_id }}"/>
    </div>
    <input id="nama" type="hidden" name="nama" value="{{ $desa->nama }}"/>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <select class="form-control" id="list_desa" name="desa_id" data-placeholder="Pilih Desa" style="width: 100%;">
        <option selected value="" disabled>Pilih Desa</option>
        @if ($desa->desa_id || $desa->nama)
            <option selected value="{{ $desa->desa_id }}">{{ $desa->nama }}</option>
        @endif
        </select>
    </div>
</div>

<div class="form-group">
    <label for="website" class="control-label col-md-4 col-sm-3 col-xs-12">Website </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('website', $desa->website, ['class' => 'form-control', 'id' => 'website', 'placeholder' => 'Contoh : https://arungkeke.desa.id']) !!}
    </div>
</div>

<div class="form-group">
    <label for="luas_wilayah" class="control-label col-md-4 col-sm-3 col-xs-12">Luas Wilayah (km<sup>2</sup>)<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('luas_wilayah', $desa->luas_wilayah, ['class' => 'form-control',  'id' => 'luas_wilayah', 'required' => true, 'placeholder' => 'Luas Wilayah Desa', 'step' => '0.1']) !!}
    </div>
</div>

<div class="ln_solid"></div>
