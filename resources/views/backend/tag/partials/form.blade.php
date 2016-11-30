<br>

@if(isset($data['tag']))
  <div class="form-group">
      <div class="fg-line">
        <label class="fg-label">标签</label>
        <input type="text" class="form-control" name="tag" id="tag" value="{{ $data['tag'] }}" placeholder="标签">
      </div>
  </div>

  <br>
@endif

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">标题</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ $data['title'] }}" placeholder="标题">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">副标题</label>
      <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $data['subtitle'] }}" placeholder="副标题">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">描述</label>
        <textarea class="form-control auto-size" id="meta_description" name="meta_description" placeholder="描述">{{ $data['meta_description'] }}</textarea>
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">布局</label>
        <input type="text" class="form-control" name="layout" id="layout" value="{{ $data['layout'] }}" placeholder="布局" disabled>
    </div>
</div>

<br>

<div class="form-group">
    <label class="radio radio-inline m-r-20">
        <input type="radio" name="reverse_direction" id="reverse_direction" @if (! $data['reverse_direction']) checked="checked" @endif value="0">
        <i class="input-helper"></i>
        Normal
    </label>

    <label class="radio radio-inline m-r-20">
        <input type="radio" name="reverse_direction" @if ($data['reverse_direction']) checked="checked" @endif value="1">
        <i class="input-helper"></i>
        Reverse
    </label>
</div>

<br>