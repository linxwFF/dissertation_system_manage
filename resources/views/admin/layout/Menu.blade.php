<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <span class="label label-success pull-right">New</span>
                                <img class="img-circle img-sm img-border" src="{{asset('back/img/profile-photos/1.png')}}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                <p class="mnp-name">Aaron Chavez</p>
                                <span class="mnp-desc">aaron.cha@themeon.net</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="ti-medall icon-lg icon-fw"></i> Link 1
                            </a>

                        </div>
                    </div>

                    <!-- 左边的导航列表 -->
                    <ul id="mainnav-menu" class="list-group">
                        <?php $comData=Request::get('comData_menu'); ?>
                        @foreach($comData['top'] as $v)
                        <li @if(in_array($v['id'],$comData['openarr'])) active @endif>
                            <a href="#">
                                <i class="{{$v['icon']}}"></i>
						                    <span class="menu-title">
												<strong>{{$v['label']}}</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul  @if(in_array($v['id'],$comData['openarr'])) class="collapse in" aria-expanded="true" @endif>
                                @foreach($comData[$v['id']] as $vv)
                                    <li> <a href="<?php echo url("/".str_replace(".","/",$vv['name'])); ?>" @if(in_array($vv['id'],$comData['openarr'])) class="active"><i class="ti-target"></i> @else > @endif  {{$vv['label']}} </a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                        {{--
                        <!--超级管理员-->
                        <li class="active">
                            <a href="#">
                                <i class="ti-lock"></i>
						                    <span class="menu-title">
												<strong>权限管理</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="/admin/permission/index" class="active"><i class="ti-target"></i>权限列表</a></li>
                                <li><a href="/admin/role/index">角色列表</a></li>
                                <li><a href="/admin/user/index">用户管理</a></li>
                            </ul>
                        </li>

                        <!--课题选择环节-->
                        <li>
                            <a href="#">
                                <i class="ti-receipt"></i>
						                    <span class="menu-title">
												<strong>课题选择环节</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse">
                                <li><a href="#">课题申报</a></li>
                                <li><a href="#">课题审核</a></li>
                                <li><a href="#">选题情况汇总</a></li>
                                <li><a href="#">指导教师安排</a></li>
                                <li><a href="#">课题汇总</a></li>
                                <li><a href="#">课题参与人确定</a></li>
                                <li><a href="#">课题修改申请审核</a></li>
                            </ul>
                        </li>
                        --}}
                        {{--<li>
                            <a href="#">
                                <i class="ti-files"></i>
						                    <span class="menu-title">
												<strong>开题报告环节</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse">
                                <li><a href="#">开题报告审核</a></li>
                                <li><a href="#">开题答辩记录表</a></li>
                                <li><a href="#">开题答辩PPT</a></li>
                                <li><a href="#">开题答辩分组</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ti-book"></i>
						                    <span class="menu-title">
												<strong>中期检查环节</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse">
                                <li><a href="#">中期检查报告</a></li>
                                <li><a href="#">浏览周记</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="#">
                                <i class="ti-smallcap"></i>
						                    <span class="menu-title">
												<strong>程序测试环节</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse">
                                <li><a href="#">测试记录表</a></li>
                                <li><a href="#">系统测试答辩结果</a></li>
                                <li><a href="#">系统源代码</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="#">
                                <i class="ti-comments-smiley"></i>
						                    <span class="menu-title">
												<strong>论文答辩环节</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse">
                                <li><a href="#">答案记录</a></li>
                                <li><a href="#">论文答辩PPT</a></li>
                                <li><a href="#">论文答辩分组</a></li>
                                <li><a href="#">审核论文初稿</a></li>
                                <li><a href="#">查看论文</a></li>
                                <li><a href="#">答辩评分汇总</a></li>
                            </ul>
                        </li>


                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="ti-receipt"></i>
                                <span class="menu-title">论文成绩</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                <li>
                                    <a href="#">录入<i class="arrow"></i></a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="#">指导教师成绩评审</a></li>
                                        <li><a href="#">评阅教师成绩评审</a></li>
                                        <li><a href="#">答辩委员会决议书</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">统计</a></li>
                                <li><a href="#">成绩修改</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="#">
                                <i class="ti-pencil-alt2"></i>
						                    <span class="menu-title">
												<strong>课题任务环节</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--子项目-->
                            <ul class="collapse">
                                <li><a href="#">时间段任务下达</a></li>
                                <li><a href="#">任务书审核</a></li>
                                <li><a href="#">任务书下达</a></li>
                            </ul>
                        </li>
                        --}}

                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
