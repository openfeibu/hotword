var locahost ="http://xhapi.feibu.info/";
//判断是否在微信浏览器、
function is_weixn(){  
    var ua = navigator.userAgent.toLowerCase();  
    if(ua.match(/MicroMessenger/i)=="micromessenger") {  
        return true;  
    } else {  
        return false;  
    }  
} 
console.log(1)
//微信注入
function fb_config(){
   $.getJSON(locahost +'wechat/getConfig',{"url":location.href},function(data) {
        if(data.code == 200){
          wx.config({
          debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
          appId: data.data.appId, // 必填，公众号的唯一标识
          timestamp:data.data.timestamp , // 必填，生成签名的时间戳
          nonceStr:data.data.nonceStr, // 必填，生成签名的随机串
          signature: data.data.signature,// 必填，签名，见附录1
          jsApiList: ["onMenuShareAppMessage","onMenuShareTimeline","openAddress","scanQRCode"],// 必填，需要使用的JS接口列表，所有JS接口列表见附录2
          // url:decodeURIComponent(data.data.url)
        });
      }
    })
}
$(function(){
  try {
    if (wx && is_weixn()) {
       fb_config();
      }
    } catch (e) {
       
    }
})
//微信注入