jQuery(document).ready(function () {
    jQuery('#mejs').mediaelementplayer({
		autoplay: true,
        loop: true,
        shuffle: false,
        playlist: false,
        audioHeight: 80,
        audioVolume: "vertical",
        playlistposition: 'bottom',
        features: ['playlistfeature', 'prevtrack', 'playpause', 'stop', 'nexttrack', 'current', 'progress', 'duration', 'volume', 'playlist'],
        keyActions: []
    });
    
    if (jQuery('#mejs').attr("width") < 250) {
        jQuery('.mejs-prevtrack-button, .mejs-nexttrack-button').css({ 'display': 'none' });
    }
    if (jQuery('#mejs').attr("width") < 10000) {
        jQuery('.mejs-stop-button').css({ 'display': 'none' });
    }
    // remove a suspicious element that causes the page content to be smaller on iPhone and iPad
    jQuery('.mejs-offscreen').remove();

    jQuery('.mejs-playlist').mCustomScrollbar({
        theme: "minimal"
    });
});
jQuery.noConflict();