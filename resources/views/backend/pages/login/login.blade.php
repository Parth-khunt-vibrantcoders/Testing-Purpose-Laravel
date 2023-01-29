@extends('backend.layouts.login_layout')
@section('section')
<!-- BEGIN LOGIN FORM -->
<form class="form"  id="login-form" method="POST" enctype="multipart/form-data" action="{{ route('check-login') }}">@csrf
    <h3 class="form-title font-green">Sign In</h3>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email / Mobile no</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email" /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-block green uppercase">Login</button>
    </div>

</form>
<!-- END LOGIN FORM -->
@endsection
