<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <strong>CopyRight ©广州飞步信息科技有限公司</strong>
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
		  //分享任务
	wx.ready(function(){
		var des = $(".markdown-body").length == 0 ? $("meta[name=description]").attr("content") : $(".markdown-body").find("p").text();
		console.log(des)
		wx.onMenuShareAppMessage({
			  title: $("title").text(), // 分享标题
			  desc: des, // 分享描述
			  link: 'http://word.feibu.info', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			  imgUrl: 'http://word.feibu.info/default/images/logo.png', // 分享图标
			  type: 'link', // 分享类型,music、video或link，不填默认为link
			  dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			  success: function () { 
				  fb_toast("分享成功");
				  
			  },
			  cancel: function () { 
				fb_toast("取消分享", "cancel");
			  } 
		  });
		wx.onMenuShareTimeline({
			title: $("title").text()+des, // 分享标题
			link: 'http://word.feibu.info', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			imgUrl: 'http://word.feibu.info/default/images/logo.png', // 分享图标
			success: function () { 
				fb_toast("分享成功");
			},
			cancel: function () { 
				fb_toast("取消分享", "cancel");
			}
		});
	})
</script>
{!! $systemPresenter->getKeyValue('statistics_script') !!}