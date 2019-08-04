// set up youtube player

if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )) {
 // some code..
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}


var paused = false;
var player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '390',
    width: '640',
    videoId: '4Y6u4ggUY9A',
    playerVars: { 'autoplay': 1, 'controls': 0 },

    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}


function onPlayerReady(event) {
    // mute player, set watch link, set mute toggle
    $('#player-container').show();
    player.mute();
    $('#mute').hide()
    $("#watch").attr("href", player.getVideoUrl());
    $("#mute").click(toggleMute);
    $("#pause").click(togglePause);

    // make youtube player correct size
    $(window).on("resize", function () {
        var $player = $("#player");
        var windowWidth = $(window).width();
        var windowHeight = $(window).height() - 50;
        var ratio = 1280.0 / 580;
        var vidRatio = 16.0 / 9;
        var hAdjust = 720.0 / 580;
        if (windowWidth / windowHeight > ratio) { // too wide
            $player.width(windowWidth);
            var playerHeight = windowWidth / vidRatio;
            $player.height(playerHeight);
            var marginTop = (windowHeight - playerHeight) / 2;
            $player.css('margin-left', 0);
            $player.css('margin-top', marginTop+'px');
        } else { // too tall
            var playerHeight = windowHeight * hAdjust;
            var playerWidth = ratio * playerHeight;
            $player.height(playerHeight);
            $player.width(playerWidth);
            var marginLeft = (windowWidth - playerWidth) / 2;
            $player.css('margin-top', -(720.0 - 580) / 2 * hAdjust);
            $player.css('margin-left', marginLeft+'px');
        }
    }).resize();
}

function onPlayerStateChange(event) {
    // hide text until player loads + 2 seconds
    if (event.data == YT.PlayerState.PLAYING) {
        setTimeout(function (){
            $('#mute').show()
        }, 2000);
    }
    if(event.data === 0) {
      $('#player').hide()
      $('#mute').hide()
    }
}



function toggleMute() {
    if (player.isMuted()) {
        player.unMute();
        $("#mute").html("Mute");
    } else {
        player.mute();
        $("#mute").html("Unmute");
    }
}

function togglePause() {
    $("#pause").removeClass("icon-pause2 icon-play3");
    if (paused) {
        player.playVideo();
        $("#pause").addClass("icon-pause2");
        paused = false;
    } else {
        player.pauseVideo();
        $("#pause").addClass("icon-play3");
        paused = true;
    }
}
