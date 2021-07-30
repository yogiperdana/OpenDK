@csrf
@method('PUT')
<div class="form-group">
    <label for="desa_id" class="control-label col-md-4 col-sm-3 col-xs-12">Kode Wilayah Desa <span class="required">*</span></label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('desa_id', null, ['class' => 'form-control', 'readonly' => false, 'id' => 'desa_id', 'data-inputmask' => "'mask': ['99.99.99.9999']", 'data-mask' => '', 'placeholder'=> 'Kode Wilayah Desa, Contoh : ' . config('app.default_profile') . '.xxxx', 'minlength' => 13, 'maxlength' => 13, 'required' => true]) !!}
    </div>
</div>
<div class="form-group">
    <label for="nama" class="control-label col-md-4 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('nama', null, ['class' => 'form-control', 'required' => true, 'id' => 'nama', 'placeholder' => 'Nama Desa']) !!}
    </div>
</div>
<div class="form-group">
    <label for="website" class="control-label col-md-4 col-sm-3 col-xs-12">Website </label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('website', null, ['class' => 'form-control',  'id' => 'website', 'placeholder' => 'Contoh : https://arungkeke.desa.id']) !!}
    </div>
</div>
<div class="form-group">
    <label for="luas_wilayah" class="control-label col-md-4 col-sm-3 col-xs-12">Luas Wilayah (km<sup>2</sup>)<span class="required">*</span></label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('luas_wilayah', null, ['class' => 'form-control', 'id' => 'luas_wilayah', 'placeholder' => 'Luas Wilayah Desa','step' => '0.1']) !!}
    </div>
</div>
<div class="ln_solid"></div>

@push('scripts')
<!-- InputMask -->
<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
    $(function () {
        $('[data-mask]').inputmask();
    });
</script>
@endpush
