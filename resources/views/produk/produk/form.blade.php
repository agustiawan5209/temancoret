<div class="form-control {{ $errors->has('nama') ? 'has-error' : '' }}">
    <div class="label">
        <label for="nama" class="label-text text-white">{{ 'Nama' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="nama" type="text" id="nama"
        value="{{ isset($produk->nama) ? $produk->nama : '' }}">

    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
    <div class="label">
        <label for="deskripsi" class="label-text text-white">{{ 'Deskripsi' }}</label>
    </div>
    <textarea class="textarea" rows="5" name="deskripsi" type="textarea" id="deskripsi">{{ isset($produk->deskripsi) ? $produk->deskripsi : '' }}</textarea>

    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('gambar') ? 'has-error' : '' }}">
    <div class="label">
        <x-input-label for="gambar" class="label-text text-white">{{ 'Gambar' }}</x-input-label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="gambar" type="file" id="gambar"
        value="{{ isset($produk->gambar) ? $produk->gambar : '' }}">
    @if (isset($produk->gambar))
        <span class="label-text text-white">kosongkan jika tidak mengubah</span>
    @endif
    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('katalog') ? 'has-error' : '' }}">
    <div class="label">
        <label for="katalog" class="label-text text-white">{{ 'Katalog' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="katalog" type="text" id="katalog"
        value="{{ isset($produk->katalog) ? $produk->katalog : '' }}">

    {!! $errors->first('katalog', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('stok') ? 'has-error' : '' }}">
    <div class="label">
        <label for="stok" class="label-text text-white">{{ 'Stok' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="stok" type="number" id="stok"
        value="{{ isset($produk->stok) ? $produk->stok : '' }}">

    {!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('stok') ? 'has-error' : '' }}">
    <div class="label">
        <label for="stok" class="label-text text-white">{{ 'Stok' }}</label>
    </div>
    <select class="input input-bordered w-full max-w-xs" name="jenis">
        <option value="{{ isset($produk->jenis) ? $produk->jenis : '' }}">
            {{ isset($produk->jenis) ? $produk->jenis : '--Pilih Jenis--' }}</option>
        <option value="Lengan Pendek">Lengan Pendek</option>
        <option value="Lengan Panjang">Lengan Panjang</option>
        <option value="Hoddie">Hoddie</option>
        <option value="Krunet">Krunet</option>
    </select>

    {!! $errors->first('select', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-sm btn-info" type="submit" value="{{ $formMode === 'edit' ? 'Edit' : 'Tambah' }}">
</div>
