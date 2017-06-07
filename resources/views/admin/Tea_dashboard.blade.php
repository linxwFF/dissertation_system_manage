@extends('admin.layout.master')

{{--标题--}}
@section('title','协同办公平台')

@section('content')
    @section('page_title','教师')  {{--页面标题--}}
    @include('admin.layout.bodyHeader')  {{--主页面头--}}
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">


        <div class="timeline two-column">
    					    <!-- Timeline header -->
    					    <div class="timeline-header">
    					        <div class="timeline-header-title bg-success">Now</div>
    					    </div>

    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon">
    					                <img alt="Profile picture" src="{{asset('back/img/profile-photos/8.png')}}">
    					            </div>
    					            <div class="timeline-time">30 Min ago</div>
    					        </div>
    					        <div class="timeline-label">
    					            <p class="mar-no pad-btm">
    					                <a class="btn-link text-semibold" href="#">Maria J.</a> shared an image</p>
    					            <div class="img-holder">
    					                <img alt="Image" src="{{asset('back/img/bg-img-3.jpg')}}">
    					            </div>
    					        </div>
    					    </div>
    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon">
    					                <i class="demo-pli-office icon-2x"></i>
    					            </div>
    					            <div class="timeline-time">2 Hours ago</div>
    					        </div>
    					        <div class="timeline-label">
    					            <h4 class="mar-no pad-btm"><a class="text-danger" href="#">Job Meeting</a></h4>
    					            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
    					        </div>
    					    </div>
    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon">
    					                <img alt="Profile picture" src="{{asset('back/img/profile-photos/9.png')}}">
    					            </div>
    					            <div class="timeline-time">3 Hours ago</div>
    					        </div>
    					        <div class="timeline-label">
    					            <p class="mar-no pad-btm">
    					                <a class="btn-link text-semibold" href="#">Lisa D.</a> commented on
    					                <a href="#" class="text-semibold">The Article</a>
    					            </p>
    					            <blockquote class="bq-sm bq-open mar-no">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
    					        </div>
    					    </div>
    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon"><i class="demo-pli-twitter icon-2x"></i>
    					            </div>
    					            <div class="timeline-time">5 Hours ago</div>
    					        </div>
    					        <div class="timeline-label">
    					            <img alt="Profile picture" src="{{asset('back/img/profile-photos/3.png')}}" class="img-xs img-circle">
    					            <a class="btn-link text-semibold" href="#">Bobby Marz</a> followed you.
    					        </div>
    					    </div>
    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon"><i class="demo-pli-mail icon-2x"></i>
    					            </div>
    					            <div class="timeline-time">15:45</div>
    					        </div>
    					        <div class="timeline-label">
    					            <p class="text-main text-semibold">Lorem ipsum dolor sit amet</p>
    					            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
    					        </div>
    					    </div>
    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon bg-success"><i class="demo-psi-like icon-lg"></i>
    					            </div>
    					            <div class="timeline-time">13:27</div>
    					        </div>
    					        <div class="timeline-label">
    					            <img alt="Profile picture" src="{{asset('back/img/profile-photos/2.png')}}" class="img-xs img-circle">
    					            <a class="btn-link text-semibold" href="#">Michael Both</a> Like <a href="#" class="text-semibold">The Article</a>
    					        </div>
    					    </div>
    					    <div class="timeline-entry">
    					        <div class="timeline-stat">
    					            <div class="timeline-icon"></div>
    					            <div class="timeline-time">11:27</div>
    					        </div>
    					        <div class="timeline-label">
    					            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
    					        </div>
    					    </div>
    					    <div class="clearfix"></div>
    					</div>

    <!--===================================================-->
    <!--End page content-->
@endsection
