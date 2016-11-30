@if(Request::is('admin/post/create'))
    <form class="keyboard-save" role="form" method="POST" id="postCreate" action="{{ route('admin.post.store') }}">
@else
    <form class="keyboard-save" role="form" method="POST" id="postUpdate" action="{{ route('admin.post.update', $id) }}">
    <input type="hidden" name="_method" value="PUT">
@endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    @include('shared.errors')
                    @include('shared.success')

                    @if(Request::is('admin/post/create'))
                        <ol class="breadcrumb">
                            <li><a href="{{ url('admin') }}">主页</a></li>
                            <li><a href="{{ url('admin/post') }}">文章</a></li>
                            <li class="active">新建文章</li>
                        </ol>
                        <h2>创建一篇新文章</h2>
                    @else
                        <ol class="breadcrumb">
                            <li><a href="{{ url('admin') }}">主页</a></li>
                            <li><a href="{{ url('admin/post') }}">文章</a></li>
                            <li class="active">修改文章</li>
                        </ol>
                        <h2>
                            Edit <em>{{ $title }}</em>
                            <small>上次修改时间 {{ $updated_at->format('M d, Y') }} at {{ $updated_at->format('g:i A') }}</small>
                        </h2>
                    @endif
                </div>
                <div class="card-body card-padding">
                    <br>
                    <div class="form-group">
                        <div class="fg-line">
                            <input type="text" class="form-control" name="title" id="title" value="{{ $title }}" placeholder="标题">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="fg-line">
                            <input type="text" class="form-control" name="slug" id="slug" value="{{ $slug }}" placeholder="固定链">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="fg-line">
                            <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $subtitle }}" placeholder="副标题">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="fg-line">
                            <textarea id="editor" name="content" placeholder="内容">{{ $content }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2>发布</h2>
                    <hr>
                </div>
                <div class="card-body card-padding">
                    <div class="form-group">
                        <div class="toggle-switch toggle-switch-demo" data-ts-color="blue">
                            <label for="is_draft" class="ts-label">草稿？</label>
                            <input {{ checked($is_draft) }} type="checkbox" name="is_draft">
                            <label for="is_draft" class="ts-helper"></label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="fg-line">
                            <label><i class="zmdi zmdi-calendar"></i>&nbsp;&nbsp;发布时间</label>
                            <input class="form-control datetime-picker" name="published_at" id="published_at" type="text" value="{{ $published_at }}" placeholder="YYYY/MM/DD HH:MM:SS" data-mask="0000/00/00 00:00:00">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="fg-line">
                            <label class="fg-label"><i class="zmdi zmdi-view-web"></i>&nbsp;&nbsp;布局</label>
                            <input type="text" class="form-control" name="layout" id="layout" value="{{ $layout }}" placeholder="Layout" disabled>
                        </div>
                    </div>
                    <br>
                    @if(!Request::is('admin/post/create'))
                        <div class="form-group">
                            <div class="fg-line">
                                <label class="fg-label"><i class="zmdi zmdi-link"></i>&nbsp;&nbsp;固定标识</label><br>
                                <a href="{{ url('blog/' . $slug) }}" target="_blank" name="permalink">{{ url('blog/' . $slug) }}</a>
                            </div>
                        </div>
                        <br>
                    @endif
                    <div class="form-group">
                        @if(Request::is('admin/post/create'))
                            <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> 发布</button>
                            &nbsp;
                            <a href="{{ url('admin/post') }}"><button type="button" class="btn btn-link">取消</button></a>
                        @else
                            <button type="submit" class="btn btn-primary btn-icon-text" name="action" value="continue">
                                <i class="zmdi zmdi-floppy"></i> 更新
                            </button>
                            &nbsp;
                            <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#modal-delete" id="confirmDelete">
                                <i class="zmdi zmdi-delete"></i> 删除
                            </button>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>图片</h2>
                    <hr>
                </div>
                <div class="card-body card-padding">
                    <div class="form-group">
                        <div class="fg-line">
                            <div class="input-group">
                                <input type="text" class="form-control" name="page_image" id="page_image" alt="Image thumbnail" placeholder="文章图片" v-model="pageImage">
                                <span class="input-group-btn" style="margin-bottom: 11px">
                                    <button style="margin-bottom: -5px" type="button" class="btn btn-primary waves-effect" @click="openFromPageImage()">选择图片</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="visible-sm space-10"></div>
                    <div>
                        <img v-if="pageImage" class="img img-responsive" id="page-image-preview" style="margin-top: 3px; max-height:100px;" :src="pageImage">
                        <span v-else class="text-muted small">没有选择图片</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>标签</h2>
                    <hr>
                </div>
                <div class="card-body card-padding">
                    <div class="form-group">
                        <div class="fg-line">
                            <select name="tags[]" id="tags" class="selectpicker" multiple>
                                @foreach ($allTags as $tag)
                                    <option @if (in_array($tag, $tags)) selected @endif value="{{ $tag }}">{{ $tag }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>关键字</h2>
                    <hr>
                </div>
                <div class="card-body card-padding">
                    <div class="form-group">
                        <div class="fg-line">
                            <textarea class="form-control auto-size" name="meta_description" id="meta_description" style="resize: vertical" placeholder="关键字">{{ $meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<media-modal v-if="showMediaManager" @close="showMediaManager = false">
    <media-manager
            :is-modal="true"
            :selected-event-name="selectedEventName"
            @close="showMediaManager = false"
    ></media-manager>