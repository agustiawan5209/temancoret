<div class="form-control {{ $errors->has('logo') ? 'has-error' : ''}}">
<div class="label">
    <label for="logo" class="label-text text-white">{{ 'Logo' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="logo" type="file" id="logo" value="{{ isset($profile->logo) ? $profile->logo : ''}}" >

    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('nama') ? 'has-error' : ''}}">
<div class="label">
    <label for="nama" class="label-text text-white">{{ 'Nama' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="nama" type="text" id="nama" value="{{ isset($profile->nama) ? $profile->nama : ''}}" >

    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
<div class="label">
    <label for="deskripsi" class="label-text text-white">{{ 'Deskripsi' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="deskripsi" type="text" id="deskripsi" value="{{ isset($profile->deskripsi) ? $profile->deskripsi : ''}}" >

    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('ig') ? 'has-error' : ''}}">
<div class="label">
    <label for="ig" class="label-text text-white">{{ 'Ig' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="ig" type="text" id="ig" value="{{ isset($profile->ig) ? $profile->ig : ''}}" >

    {!! $errors->first('ig', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('fb') ? 'has-error' : ''}}">
<div class="label">
    <label for="fb" class="label-text text-white">{{ 'Fb' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="fb" type="text" id="fb" value="{{ isset($profile->fb) ? $profile->fb : ''}}" >

    {!! $errors->first('fb', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('wa') ? 'has-error' : ''}}">
<div class="label">
    <label for="wa" class="label-text text-white">{{ 'Wa' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="wa" type="text" id="wa" value="{{ isset($profile->wa) ? $profile->wa : ''}}" >

    {!! $errors->first('wa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('alamat') ? 'has-error' : ''}}">
<div class="label">
    <label for="alamat" class="label-text text-white">{{ 'Alamat' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="alamat" type="text" id="alamat" value="{{ isset($profile->alamat) ? $profile->alamat : ''}}" >

    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-sm" type="submit" >{{ $formMode === 'edit' ? 'Edit' : 'Tambah' }}</button>
</div>
