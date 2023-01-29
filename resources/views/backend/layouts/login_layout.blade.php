<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="<?= $description?>" name="description" />
        <meta content="<?= $keywords?>" name="keywords" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{  asset('backend/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/pages/css/login.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{  asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
        @if (!empty($css))
            @foreach ($css as $value)
                @if(!empty($value))
                    <link rel="stylesheet" href="{{ asset('backend/assets/css/customcss/'.$value) }}">
                @endif
            @endforeach
        @endif

        @if (!empty($plugincss))
            @foreach ($plugincss as $value)
                @if(!empty($value))
                    <link rel="stylesheet" href="{{ asset('backend/assets/'.$value) }}">
                @endif
            @endforeach
        @endif

        <script>
            var baseurl = "{{ asset('/') }}";
        </script>

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="{{  asset('backend/assets/pages/img/logo-big.png') }}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            @yield('section')
        </div>
        <div class="copyright"> 2014 © Metronic. Admin Dashboard Template. </div>

        <!-- BEGIN CORE PLUGINS -->
        <script src="{{  asset('backend/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{  asset('backend/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        @if (!empty($pluginjs))
			@foreach ($pluginjs as $value)
				<script src="{{ asset('backend/assets/js/'.$value) }}" type="text/javascript"></script>
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
    </body>

</html>
