var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//API code載入後，取代id=player的div為帶有YouTube player的iframe tag
var player = $("div[name='player']");
function onYouTubeIframeAPIReady() {//此函數在IFrame Player API code 載入後將自動呼叫
 player = new YT.Player('player', {
   height: '390',
   width: '640',
   videoId: $(player).data('url') //Youtube ID
 });
}

$(document).ready(function(){
$("#play").click(function(){
 //按下播放按鈕
 player.playVideo();
});

$("#pause").click(function(){
 //按下暫停按鈕
 player.pauseVideo();
});
});
