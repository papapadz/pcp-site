<script src="https://meet.jit.si/external_api.js"></script>
<script>
    var domain = "meet.jit.si";
    var options = {
        roomName: "adouiaspoduoapsdiou213213asd",
        parentNode: document.querySelector('#meet'),
        configOverwrite: {},
        interfaceConfigOverwrite: {
            // filmStripOnly: true
            HIDE_INVITE_MORE_HEADER: true,
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