<br>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">手机号</label>
      <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $data['mobile'] }}" placeholder="手机号">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">邮箱地址</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ $data['email'] }}" placeholder="Email Address">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">国籍</label>
        <input type="text" class="form-control" name="country" id="country" value="{{ $data['country'] }}" placeholder="Country">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">城市</label>
        <input type="text" class="form-control" name="city" id="city" value="{{ $data['city'] }}" placeholder="City">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">家庭住址</label>
      <input type="text" class="form-control" name="address" id="address" value="{{ $data['address'] }}" placeholder="Address">
    </div>
</div>



@include('backend.profile.partials.modals.resume-help')