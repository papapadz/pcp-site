<script src="https://meet.jit.si/external_api.js"></script>
<script>
    var domain = "meet.jit.si";
    var options = {
        //roomName: "{{ $media->url }}",
        roomName: "adasdasdq3421",
        parentNode: document.querySelector('#meet'),
        configOverwrite: {
            prejoinPageEnabled: false,
            disableAudioLevels: true,
            disableAP: true,
            disableAEC: true,
            disableAGC: true,
            disableNS: true,
            disableHPF: true,
        },
        interfaceConfigOverwrite: {
            // filmStripOnly: true
            SET_FILMSTRIP_ENABLED: false,
            HIDE_INVITE_MORE_HEADER: true,
            DISABLE_FOCUS_INDICATOR: true,
            DISABLE_DOMINANT_SPEAKER_INDICATOR: true,
            DISABLE_VIDEO_BACKGROUND: true,
            SHOW_CHROME_EXTENSION_BANNER: false,
            SHOW_JITSI_WATERMARK: false,
            TOOLBAR_BUTTONS: [
                'microphone', 'camera', 'closedcaptions', 'fullscreen',
                'fodeviceselection', 'hangup', 'chat', 'raisehand',
                'videoquality', 'filmstrip',
                'tileview'
            ],
        },
        userInfo: {
        email: '{{ Auth::user()->email }}',
        displayName: '{{ Auth::user()->member->first_name }} '+'{{ Auth::user()->member->last_name }}'
    }
    }
    var api = new JitsiMeetExternalAPI(domain, options);
</script>