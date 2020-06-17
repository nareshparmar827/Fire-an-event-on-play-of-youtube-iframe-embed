# Fire an event on play of youtube iframe embed

# Example Code :

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
            videoId: 'RWeFOe2Cs4k',
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {

      if (event.data == YT.PlayerState.PLAYING) {
         alert('video started');
         playing = true;
        }

      else if(event.data == YT.PlayerState.PAUSED){
            alert('video paused');
            playing = false;
       }
}
</script>
