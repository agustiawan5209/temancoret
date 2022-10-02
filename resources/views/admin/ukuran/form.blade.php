<div class="form-control {{ $errors->has('produk_id') ? 'has-error' : ''}}">
<div class="label">
    <label for="produk_id" class="label-text">{{ 'Produk Id' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="produk_id" type="number" id="produk_id" value="{{ isset($ukuran->produk_id) ? $ukuran->produk_id : ''}}" >

    {!! $errors->first('produk_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('katalog') ? 'has-error' : ''}}">
<div class="label">
    <label for="katalog" class="label-text">{{ 'Katalog' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="katalog" type="text" id="katalog" value="{{ isset($ukuran->katalog) ? $ukuran->katalog : ''}}" >

    {!! $errors->first('katalog', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-sm" type="submit" >{{ $formMode === 'edit' ? 'Edit' : 'Tambah' }}</button>
</div>
