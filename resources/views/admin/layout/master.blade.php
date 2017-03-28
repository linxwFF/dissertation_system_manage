<!DOCTYPE html>
<html lang="en">
<head>

    {{--头文件--}}
    @include('admin.layout.head')
    {{--扩展的css文件--}}
    @yield('extendCss')


</head>

<body>
    <!-- 加载动画 -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    @section('container')
    <div id="container" class="effect mainnav-lg">

        <!--顶部导航-->
        @include('admin.layout.top_navbar')
        <!--===================================================-->
        <!--END 顶部导航-->

        <div class="boxed">
            <!--CONTENT 主体内容-->
            <!--===================================================-->
            <div id="content-container">
            @yield('content')
            </div>
            <!--===================================================-->
            <!--END CONTENT 主体内容-->
        </div>

            <!--MAIN 左边导航-->
            <!--===================================================-->
            @include('admin.layout.Menu')
            <!--===================================================-->
            <!--END MAIN 左边导航-->

            <!--右边更多选项-->
            <!--===================================================-->
            @include('admin.layout.right_more_tab')
            <!--===================================================-->
            <!--END 右边更多选项-->
        </div>

        <!-- FOOTER -->
        <!--===================================================-->
        @include('admin.layout.footer')
        <!--===================================================-->
        <!-- END FOOTER -->

        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    @show
    <!--===================================================-->
    <!-- END OF CONTAINER -->
</body>
{{--扩展的JS文件--}}
@yield('extendJs')
</html>
