@extends('admin.layout.master')

{{--标题--}}
@section('title','404')

@section('container')
    <div id="container" class="cls-container">

        <!-- HEADER -->
        <!--===================================================-->
        <div class="cls-header">
            <div class="cls-brand">
                <a class="box-inline" href="/">
                    <!-- <img alt="Nifty Admin" src="images/logo.png" class="brand-icon"> -->
                    <span class="brand-title">云校园 - 协同办公平台<span class="text-thin"> Admin </span></span>
                </a>
            </div>
        </div>

        <!-- CONTENT -->
        <!--===================================================-->
        <div class="cls-content">
            <h1 class="error-code text-info">404</h1>
            <p class="text-main text-semibold text-lg text-uppercase">Page Not Found!</p>
            <div class="pad-btm text-muted">
                Sorry, 您访问的页面消失在银河系中。
            </div>
            <div class="row mar-ver">
                <form class="col-xs-12 col-sm-10 col-sm-offset-1" method="post" action="pages-search-results.html">
                    <input type="text" placeholder="Search.." class="form-control input-lg error-search">
                </form>
            </div>
            <hr class="new-section-sm bord-no">
            <div class="pad-top"><a class="btn-link" href="/">返回主界面</a></div>
        </div>


    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
@endsection