/**
 * Created by talv on 26/09/16.
 */

$(window).load(function () {
    /*
     *  Scroll To Top
     */
    if ($('#scroll-to-top')[0] && $('#top-link-block')[0]) {
        $('#scroll-to-top').click(function () {
            $('html,body').animate({scrollTop: 0}, 'slow');
            return false;
        });

        if (($(window).height() + 100) < $(document).height()) {
            $('#top-link-block').removeClass('hidden').affix({
                // how far to scroll down before link "slides" into view
                offset: {top: 100}
            });
        }
    }
    /*
        百度统计代码注入
     */
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?d5bf1db90590c1e27d43d6f466fe033a";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();

    // 百度搜索
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
});