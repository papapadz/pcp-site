@section('scripts')
{{-- <script src="https://meet.jit.si/external_api.js"></script> --}}
<script src="https://8x8.vc/libs/external_api.min.js"></script>
<script>
    
    var customOptions = [
                'microphone', 'camera', 'closedcaptions', 'fullscreen',
                'fodeviceselection', 'hangup', 'chat', 'raisehand',
                'videoquality', 'filmstrip',
                'tileview'
            ]
    var userRole = '{{Auth::user()->role}}'
    if(userRole==3) {
        customOptions.push('mute-everyone')
        customOptions.push('mute-video-everyone')
        customOptions.push('recording')
        customOptions.push('livestreaming')
        customOptions.push('desktop')
    } else if(userRole==2) {
        customOptions.push('desktop')
    }

    var domain = "meet.jit.si";
    var options = {
        //roomName: "{{ $media->url }}",
        roomName: "vpaas-magic-cookie-886db1261cd44fd3919486d9f7a7fb75/UsdadsuAsxaAts",
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
            TOOLBAR_BUTTONS: customOptions,
        },
        userInfo: {
        email: '{{ Auth::user()->email }}',
        displayName: '{{ Auth::user()->member->first_name }} '+'{{ Auth::user()->member->last_name }}'
    }
    }
    var api = new JitsiMeetExternalAPI(domain, options);
</script>
@endsection