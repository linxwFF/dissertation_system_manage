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
						<h3 class="h4 mar-no">帐号 登录</h3>
					</div>
                    @include('admin.partials.errors')   {{--错误提示--}}


					<form role="form" method="POST" action="{{ route('admin.login') }}">
                        {{ csrf_field() }}

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="email" value="{{ old('email') }}" autofocus >
						</div>

						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="password" >
						</div>

                        <!-- <div class="form-group">
                        <select class="form-control">
                            <option>请选择角色</option>
                            <option value="1">教师</option>
                            <option value="2">学生</option>
                            <option value="admin">超级管理员</option>
                          </select>
                        </div> -->

						<div class="checkbox pad-btm text-left">
							<input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label for="demo-form-checkbox">记住我</label>
						</div>

						<button class="btn btn-primary btn-lg btn-block" type="submit">登入</button>
					</form>


				</div>

				<div class="pad-all">
					<a href="{{ route('password.request') }}" class="btn-link mar-rgt">忘记 密码 ?</a>
					<a href="{{ route('register') }}" class="btn-link mar-lft">注册</a>

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
