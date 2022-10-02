<div class="form-control {{ $errors->has('nama') ? 'has-error' : '' }}">
    <div class="label">
        <label for="nama" class="label-text text-white">{{ 'Nama' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="nama" type="text" id="nama"
        value="{{ isset($team->nama) ? $team->nama : '' }}">

    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('gambar') ? 'has-error' : '' }}">
    <div class="label">
        <label for="gambar" class="label-text text-white">{{ 'Gambar' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="gambar" type="file" id="gambar"
        value="{{ isset($team->gambar) ? $team->gambar : '' }}">

    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
    <div class="label">
        <label for="deskripsi" class="label-text text-white">{{ 'Deskripsi' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="deskripsi" type="text" id="deskripsi"
        value="{{ isset($team->deskripsi) ? $team->deskripsi : '' }}">

    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('ig') ? 'has-error' : '' }}">
    <div class="label">
        <label for="ig" class="label-text text-white">{{ 'Ig' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="ig" type="text" id="ig"
        value="{{ isset($team->ig) ? $team->ig : '' }}">

    {!! $errors->first('ig', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('fb') ? 'has-error' : '' }}">
    <div class="label">
        <label for="fb" class="label-text text-white">{{ 'Fb' }}</label>
    </div>
    <input class="input input-bordered w-full max-w-xs" name="fb" type="text" id="fb"
        value="{{ isset($team->fb) ? $team->fb : '' }}">

    {!! $errors->first('fb', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-sm" type="submit">{{ $formMode === 'edit' ? 'Edit' : 'Tambah' }}</button>
</div>
