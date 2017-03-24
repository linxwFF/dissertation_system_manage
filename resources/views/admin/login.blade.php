@extends('admin.layout.master')

{{--标题--}}
@section('title','登录')

@section('extendCss')
	<link href="{{asset('back/plugins/magic-check/css/magic-check.min.css')}}" rel="stylesheet">

	<style>
		.demo-my-bg{
			background-image : url("{{asset('back/img/balloon.jpg')}}");
		}
	</style>
@endsection


@section('container')
	<div id="container" class="cls-container">

		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img" style="background-image: url({{asset('back/img/bg-img-3.jpg')}})"></div>


		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<div class="mar-ver pad-btm">
						<h3 class="h4 mar-no">Account Login</h3>
						<p class="text-muted">Sign In to your account</p>
					</div>
					<form action="index.html">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" autofocus>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="checkbox pad-btm text-left">
							<input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
							<label for="demo-form-checkbox">Remember me</label>
						</div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
					</form>
				</div>

				<div class="pad-all">
					<a href="#" class="btn-link mar-rgt">Forgot password ?</a>
					<a href="#" class="btn-link mar-lft">Create a new account</a>

					<div class="media pad-top bord-top">
						<div class="pull-right">
							<a href="#" class="pad-rgt"><i class="ti-facebook icon-lg text-primary"></i></a>
							<a href="#" class="pad-rgt"><i class="ti-twitter-alt icon-lg text-info"></i></a>
							<a href="#" class="pad-rgt"><i class="ti-google icon-lg text-danger"></i></a>
						</div>
						<div class="media-body text-left">
							Login with
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===================================================-->



	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->
@endsection