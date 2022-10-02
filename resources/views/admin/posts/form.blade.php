<div class="form-control {{ $errors->has('title') ? 'has-error' : ''}}">
<div class="label">
    <label for="title" class="label-text">{{ 'Title' }}</label>
</div>
    <input class="input input-bordered w-full max-w-xs" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >

    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('content') ? 'has-error' : ''}}">
<div class="label">
    <label for="content" class="label-text">{{ 'Content' }}</label>
</div>
    <textarea class="textarea" rows="5" name="content" type="textarea" id="content" >{{ isset($post->content) ? $post->content : ''}}</textarea>

    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-control {{ $errors->has('category') ? 'has-error' : ''}}">
<div class="label">
    <label for="category" class="label-text">{{ 'Category' }}</label>
</div>
    <select name="category" class="select w-full max-w-xs" id="category" >
    @foreach (json_decode('{"technology": "Technology", "tips": "Tips", "health": "Health"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->category) && $post->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>

    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <button class="btn btn-sm" type="submit" >{{ $formMode === 'edit' ? 'Edit' : 'Tambah' }}</button>
</div>
