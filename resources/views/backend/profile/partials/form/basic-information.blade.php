<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">姓名</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $data['name'] }}" placeholder="姓名">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">性别</label>
        <select name="gender" id="gender" class="selectpicker">
            <option @if($data['gender'] == null) selected @endif value="">请选择</option>
            <option @if ($data['gender'] === 'Male') selected @endif value="Male">男</option>
            <option @if ($data['gender'] === 'Female') selected @endif value="Female">女</option>
        </select>
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">生日</label>
      <input type="text" class="form-control datetime-picker" name="birthday" id="birthday" value="{{ $data['birthday'] }}" placeholder="YYYY-MM-DD" data-mask="0000-00-00">
    </div>
</div>
