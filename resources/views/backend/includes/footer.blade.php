<!-- BEGIN CORE PLUGINS -->
<script src="{{  asset('backend/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{  asset('backend/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{  asset('backend/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{  asset('backend/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
@if (!empty($pluginjs))
    @foreach ($pluginjs as $value)
        <script src="{{ asset('backend/assets/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

@if (!empty($js))
    @foreach ($js as $value)
        <script src="{{ asset('backend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

<script>
    jQuery(document).ready(function () {
        @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{  $value }}
                @endforeach
        @endif
    });
</script>
