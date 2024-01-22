@extends('layout')
@section('head')
    <link rel="stylesheet" href="css/tutor.css">
@endsection


@section('body')
    <div id="main" class="main ele-mar">
        <div class="section tutors-con1 fp-section active hidden-xs" style="height: 969px;">
            <div class="container">
                <div class="tutors1-wrap">
                    <div class="main-tit page-tit">
                        <h2 class="">严选全球外教老师</h2>
                        <p class="">为您提供完善的一对一教学体验</p>
                    </div>
                    <ul class="row">
                        <li class="l1">
                            <div class="wrap clearfix">
                                <div class="img-wrap"><img alt="" src="/picture/tutors-pic1.jpg"></div>
                                <div class="txt-wrap">
                                    <h3><span>口音地道<br>品质保证</span></h3>
                                    <p>外教长期生活工作在官方语言或母语为英语的国家，地道的英语口音，原汁原味</p>
                                </div>
                            </div>
                        </li>
                        <li class="l1">
                            <div class="wrap clearfix">
                                <div class="img-wrap"><img alt="" src="/picture/tutors-pic2.jpg"></div>
                                <div class="txt-wrap">
                                    <h3><span>丰富的<br>授课经验</span></h3>
                                    <p>我们的外教拥有丰富的教学经验、灵活的教学方法，可以帮助有不同学习需求的学员，完成短期突破或者日常练习的学习目标</p>
                                </div>
                            </div>
                        </li>
                        <li class="l2">
                            <div class="wrap clearfix">
                                <div class="txt-wrap">
                                    <h3><span>拥有良好的<br>教育经历</span></h3>
                                    <p>阿卡索严格选择拥有良好教育经历的外教，提升英语教学的质量</p>
                                </div>
                                <div class="img-wrap" ><img alt="" src="/picture/tutors-pic3.jpg"></div>
                </div>
                </li>
                <li class="l2">
                    <div class="wrap clearfix">
                        <div class="txt-wrap">
                            <!-- <h3><span>持有公认<br>教学证书</span></h3> -->
                            <h3><span>系统培训，<br>专业选拔</span></h3>
                            <!-- <p>阿卡索外教全部通过了教学资质考试和考核，均持有TESOL等公认英语教师资格证书</p> -->
                            <p>在外教的管理和培训上，“严选严控”，“全职培训”，保证上课外教的教学专业度</p>
                        </div>
                        <div class="img-wrap"><img alt="" src="/picture/tutors-pic4.jpg"></div>
            </div>
            </li>
            </ul>
        </div>
    </div>
    </div>
    <div id="slider" style="padding: 20px 15px; background: #F6F6F6; color: #7C7C7C" class="visible-xs-* hidden-sm hidden-md hidden-lg">
        <h4 class="text-center" style="padding-bottom: 1em;">
            严选全球外教老师
            <p style="font-size: 15px; padding-top: 0.5em;">为您提供贴心的一对一教学体验</p>
        </h4>
        <div class=" container member" style="padding: 0;">
            <div class="swiper-container swiper-container1 swiper-container-horizontal">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                    <div class="swiper-slide swiper-slide-prev" style="width: 360px; margin-right: 2px;">
                        <b class="col-xs-6">
                            <img src="/picture/teacher.jpg" class="img-responsive" alt=""></b>
                        <div class="col-xs-6 rinfo">
                            <div style="display: flex">

                                <div class="rtxt">
                                    <h5>口音地道</h5>
                                    <h5>原汁原味</h5>
                                </div>
                            </div>
                            <div class="introdinfo">外教长期生活工作在官方语言或母语为英语的国家，地道英语口音，原汁原味</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="width: 360px; margin-right: 2px;">
                        <b class="col-xs-6">
                            <img src="/picture/teacher1-2.png" class="img-responsive" alt=""></b>
                        <div class="col-xs-6 rinfo">
                            <div style="display: flex">

                                <div class="rtxt">
                                    <h5>丰富的</h5>
                                    <h5>授课经验</h5>
                                </div>
                            </div>
                            <div class="introdinfo">我们的外教拥有丰富的教学经验、灵活的教学方法，可以帮助有不同学习需求的学员，完成短期突破或者日常练习的学习目标</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 360px; margin-right: 2px;">
                        <b class="col-xs-6">
                            <img src="/picture/teacher1-3.png" class="img-responsive" alt=""></b>
                        <div class="col-xs-6 rinfo">
                            <div style="display: flex">

                                <div class="rtxt">
                                    <h5>拥有良好的</h5>
                                    <h5>教育经历</h5>
                                </div>
                            </div>
                            <div class="introdinfo">阿卡索严格选择有经验的好外教，同时拥有良好教育经历，提升英语教学质量 </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 360px; margin-right: 2px;">
                        <b class="col-xs-6">
                            <img src="/picture/teacher1-4.png" class="img-responsive" alt=""></b>
                        <div class="col-xs-6 rinfo">
                            <div style="display: flex">

                                <div class="rtxt">
                                    <h5>系统培训，</h5>
                                    <h5>专业选拔</h5>
                                </div>
                            </div>
                            <div class="introdinfo">在外教的管理和培训上，“严选严控”，“全职培训”，保证上课外教的教学专业度</div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            </div>

        </div>
    </div>
    <!-- 严格把关外教质量 -->
    <div class="section tutors-con2  darkBg fp-section active hidden-xs" style="height: 969px;">
        <div class="container">
            <div class="main-tit page-tit">
                <h2 class="">严格把关外教<span>质量</span></h2>
                <p class="">只为打造靠谱的外教团队</p>
            </div>
            <div class="row before luyong ">
                <div class="col-md-2 col-xs-2">
                    <strong>录用前</strong>
                </div>
                <div class="col-md-10 col-xs-10">
                    <ul class="clearfix">
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>上万份</span>
                                <b>简历资格审查</b>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>多轮筛选</span>
                                <b>面试及试讲考核</b>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>3个月</span>
                                <b>系统教学培训</b>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>录取率低</span>
                                <b>严格筛选考核通过</b>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row after luyong ">
                <div class="col-md-2 col-xs-2">
                    <strong>录用后</strong>
                </div>
                <div class="col-md-10 col-xs-10">
                    <ul class="clearfix">
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>日常监督<br>定期抽测教学质量</span>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>培训结果量化<br>严格把控外教考核</span>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>定期优化淘汰外教<br>保证老师整体水平</span>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3">
                            <div class="wrap">
                                <span>QA品控监控系统<br>保证教学内容过关</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
