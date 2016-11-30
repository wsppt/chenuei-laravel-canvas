<div class="card">
    <div class="card-header">
        <h2>快速草稿
            <small>保存一份快速草稿:</small>
        </h2>

        <br>

        @include('shared.errors')

        @include('shared.success')

        <form class="keyboard-save" role="form" method="POST" id="postCreate" action="{{ route('admin.post.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @include('backend.home.partials.form')

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> 保存</button>
            </div>
        </form>
    </div>
</div>