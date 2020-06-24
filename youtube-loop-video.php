<script src="https://www.youtube.com/iframe_api"></script>

<div class="module module-home-video">
    <span class="module-strip">Latest Product Video</span>
    <div id="video"></div>
</div>

<script>
var player, playing = false;
function onYouTubeIframeAPIReady() {
	player = new YT.Player('video', {
		height: '360',
		width: '640',
		videoId: 'fRkXDWvdPRs',
		events: {
			'onStateChange': onPlayerStateChange
		}
	});
}
function onPlayerStateChange(event) {
	console.log("==> " + event.data);
  if (event.data == YT.PlayerState.PLAYING) {
	 console.log('video started');
	 playing = true;
  } else if(event.data == YT.PlayerState.PAUSED){
		console.log('video paused');
		playing = false;
   } else if(event.data == YT.PlayerState.ENDED){
		console.log('video END');
		event.target.playVideo();
		playing = true;
   }
}
</script>
