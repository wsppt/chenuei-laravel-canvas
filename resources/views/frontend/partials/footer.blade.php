<div class="container">
    @if(!empty(Settings::disqus()))
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @include('frontend.blog.partials.disqus')
            </div>
        </div>
        <br>
    @endif
    <div style="text-align: center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
                <p class="small">
					<a href="{{ url('/') }}" target="_blank">
					&copy; {{ \Carbon\Carbon::today()->format('Y') }} {{ Settings::blogTitle() }} 
					</a>
					<a href="http://www.miitbeian.gov.cn/"></a>
				</p>    
            </div>
        </div>
    </div>
</div>

<!-- scroll to top button -->
<span id="top-link-block" class="hidden hover-button">
    <a id="scroll-to-top" href="#top">回到顶部</a>
</span>

@if (!empty(Settings::gaId()))
    @include('frontend.blog.partials.analytics')
@endif

<!-- 腾讯统计 -->
<script type="text/javascript" src="https://tajs.qq.com/stats?sId=59348762" charset="UTF-8"></script>
<!-- 站长统计 -->
<script src="https://s4.cnzz.com/z_stat.php?id=1260699525&web_id=1260699525" language="JavaScript"></script>