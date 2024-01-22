@extends('layout')
@section('head')
    <link rel="stylesheet" href="css/style-plans.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
@endsection


@section('body')
    <div class="plans-wrapper">
        <div class="section plansB ele-pad-zero">
            <div class="container ">
                <div class="plansB-wrap">
                    <div class="main-tit page-tit">
                        <h2>选择珂莎英语的理由</h2>
                    </div>
                    <div id="owl-demo" class="owl-carousel plansB-scroll owl-loaded owl-drag">

                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-380px, 0px, 0px); transition: all 0.25s ease 0s; width: 1520px;"><div class="owl-item" style="width: 380px;"><div class="item wrap">
                                        <img src="/picture/plansB1.jpg" alt="">
                                        <div class="txt-wrap">
                                            <img src="/picture/plansB-ico1.png" alt="">
                                            <span></span>
                                            <p><strong>纯外教</strong><br>严选外教拥有地道口语</p>
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 380px;"><div class="item wrap">
                                        <img src="/picture/plansB2.jpg" alt="">
                                        <div class="txt-wrap">
                                            <img src="/picture/plansB-ico2.png" alt="">
                                            <span></span>
                                            <p><strong>短时高频</strong><br>25分钟有效集中学习</p>
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 380px;"><div class="item wrap">
                                        <img src="/picture/plansB3.jpg" alt="">
                                        <div class="txt-wrap">
                                            <img src="/picture/plansB-ico3.png" alt="">
                                            <span></span>
                                            <p><strong>1对1授课</strong><br>全程专注带你提高</p>
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 380px;"><div class="item wrap">
                                        <img src="/picture/plansB4.jpg" alt="">
                                        <div class="txt-wrap">
                                            <img src="/picture/plansB-ico4.png" alt="">
                                            <span></span>
                                            <p><strong>高性价比</strong><br>一节课低至20.9元</p>
                                        </div>
                                    </div></div></div></div>

                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>

                </div>
            </div>
        </div>

        <div class="section plans-con1" style="display:none;">
            <div class="container">
                <div class="main-tit page-tit clearfix">
                    <h2>套餐价格</h2>
                    <ul id="plans-tab" class="nav nav-tabs tcul">
                        <li class="active"><a id="Inter" href="#home" data-toggle="tab">国际成人套餐</a></li>
                        <li><a id="Custom" href="#dinzhi" data-toggle="tab">定制成人套餐</a></li>

                    </ul>
                </div>
                <h6 class="title-info">任何培训套餐，均需通过我司官方渠道，转至我司对公账户。我司并未授权任何个人（包括珂莎员工）收取培训费。若发现异常可致电官方客服进行举报。</h6>
                <div class="plans-tab-wrap">
                    <div id="myTabContent" class="tab-content plansTabContent">


                        <div class="tab-pane fade in active" id="home">
                            <div class="plans-tit plans-tit1">
                                <div class="txt-wrap">
                                    <h3 class="wow fadeInRight" data-wow-delay="0.3s">
                                        珂莎课时套餐分为各类次套餐，您可以根据自己的需求选购。</h3>
                                    <p class="wow fadeInRight" data-wow-delay="0.6s">
                                        <em>次套餐</em> 次套餐课程更适合学习时间不固定的学员。
                                    </p>
                                </div>
                                <div class="tutor-brief">
                                </div>

                            </div>
                            <div class="text-right drawback">
                                <a class="tuikuan hoverIt" rel="popover" data-content="这是正文本内容" data-placement="left">退款承诺<span class="tkquestion">?</span></a>
                            </div>
                            <div class="table-responsive <%--tc-month plans-tc--%>">
                                <table id="monthTable" class="table table-bordered plans-table">
                                    <thead>
                                    <tr>
                                        <th class="bg3">套餐名称</th>
                                        <th class="bg1">有效期</th>
                                        <th class="bg2">课时数</th>
                                        <th class="bg4">套餐价</th>
                                        <th class="bg5 canbuy"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际160节套餐</td>
                                        <td class="bg-dfe3e6">240天</td>
                                        <td class="bg-e6eaed">160节课</td>
                                        <td class="bg-dfe3e6 c-green">￥6488</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=8D4E6DD647CFB8F3" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际240节套餐</td>
                                        <td class="bg-dfe3e6">360天</td>
                                        <td class="bg-e6eaed">240节课</td>
                                        <td class="bg-dfe3e6 c-green">￥8788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=AE7A2664A5FC6D34" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际320节套餐</td>
                                        <td class="bg-dfe3e6">480天</td>
                                        <td class="bg-e6eaed">320节课</td>
                                        <td class="bg-dfe3e6 c-green">￥10888</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=B410724BBE276587" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际400节套餐</td>
                                        <td class="bg-dfe3e6">600天</td>
                                        <td class="bg-e6eaed">400节课</td>
                                        <td class="bg-dfe3e6 c-green">￥12788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=118CA40B4AB378B9" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际160节套餐.次卡</td>
                                        <td class="bg-dfe3e6">480天</td>
                                        <td class="bg-e6eaed">160节课</td>
                                        <td class="bg-dfe3e6 c-green">￥6488</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=28DC36BAA6D78E48" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际240节套餐.次卡</td>
                                        <td class="bg-dfe3e6">720天</td>
                                        <td class="bg-e6eaed">240节课</td>
                                        <td class="bg-dfe3e6 c-green">￥8788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=5DF57B385190BC6F" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际320节套餐.次卡</td>
                                        <td class="bg-dfe3e6">960天</td>
                                        <td class="bg-e6eaed">320节课</td>
                                        <td class="bg-dfe3e6 c-green">￥10888</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=00E090DA6C64FDC5" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】国际400节套餐.次卡</td>
                                        <td class="bg-dfe3e6">1200天</td>
                                        <td class="bg-e6eaed">400节课</td>
                                        <td class="bg-dfe3e6 c-green">￥12788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=AC11CF1A0D217CB6" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="dinzhi">
                            <div class="plans-tit plans-tit1">
                                <div class="txt-wrap">
                                    <h3>定制套餐注重学员的专属体验，鉴于学员对课程教材、外教能力等个性化需求而开发的私人套餐，旨在帮助学员达成学习目标。</h3>
                                    <p>
                                        <em>次套餐</em> 次套餐课程更适合学习时间不固定的学员。
                                    </p>
                                </div>
                            </div>

                            <div class="text-right drawback">
                                <a class="tuikuan hoverIt" rel="popover" data-content="这是正文本内容" data-placement="left">退款承诺<span class="tkquestion">?</span></a>
                            </div>
                            <div class="table-responsive">
                                <table id="monthTable2" class="table table-bordered plans-table plans-table2">
                                    <thead>
                                    <tr>
                                        <th class="bg3">套餐名称</th>
                                        <th class="bg1">有效期</th>
                                        <th class="bg2">课时数</th>
                                        <th class="bg4">套餐价</th>
                                        <th class="bg6 canbuy"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制60节套餐</td>
                                        <td class="bg-dfe3e6">120天</td>
                                        <td class="bg-e6eaed">60节课</td>
                                        <td class="bg-dfe3e6 c-green">￥8788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=A5AA7451C7C7BA6F" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制80节套餐</td>
                                        <td class="bg-dfe3e6">160天</td>
                                        <td class="bg-e6eaed">80节课</td>
                                        <td class="bg-dfe3e6 c-green">￥11188</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=B2A0913A30F199E6" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制120节套餐</td>
                                        <td class="bg-dfe3e6">240天</td>
                                        <td class="bg-e6eaed">120节课</td>
                                        <td class="bg-dfe3e6 c-green">￥16788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=B33801D708F3BB52" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制240节套餐</td>
                                        <td class="bg-dfe3e6">480天</td>
                                        <td class="bg-e6eaed">240节课</td>
                                        <td class="bg-dfe3e6 c-green">￥30888</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=1B09DCADE553ECDF" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制60节套餐.次卡</td>
                                        <td class="bg-dfe3e6">240天</td>
                                        <td class="bg-e6eaed">60节课</td>
                                        <td class="bg-dfe3e6 c-green">￥8788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=DD9E33CA3FD93766" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制80节套餐.次卡</td>
                                        <td class="bg-dfe3e6">320天</td>
                                        <td class="bg-e6eaed">80节课</td>
                                        <td class="bg-dfe3e6 c-green">￥11188</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=D373A75F3ECC8EFA" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制120节套餐.次卡</td>
                                        <td class="bg-dfe3e6">480天</td>
                                        <td class="bg-e6eaed">120节课</td>
                                        <td class="bg-dfe3e6 c-green">￥16788</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=E7C4EA522484FF53" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-e6eaed">【优享】定制240节套餐.次卡</td>
                                        <td class="bg-dfe3e6">960天</td>
                                        <td class="bg-e6eaed">240节课</td>
                                        <td class="bg-dfe3e6 c-green">￥30888</td>
                                        <td class="bg-e6eaed canbuy">
                                            <a href="/web3/check.aspx?ID=51749AF602952EEA" class="buy-btn">立即购买 <i></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section plans-con2">
            <div class="container">
                <div class="main-tit page-tit">
                    <h2>常见问题</h2>
                </div>
                <ul id="owl-demo2" class="plansB-scroll2">
                    <li class="col-md-3 col-sm-3 col-xs-4 active">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num1.png" alt=""></div>
                            <h3>如果上课时间开始后老师一直没出现，我该怎么办？</h3>
                            <div class="bg-wrap">
                                <p>请及时联系在线客服说明情况，客服会第一时间联系老师查明原因，若因老师原因导致该节课无法顺利进行，客服将为您申请该课时的返还。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num2.png" alt=""></div>
                            <h3>如果我上课迟到了会有什么后果？</h3>
                            <div class="bg-wrap">
                                <p>您可以提前告知我们客服帮您通知老师，或者自行告知老师，让老师等候，但老师不会为您弥补您迟到的时间，即老师仍然会按时下课，不会因为您迟到而延长教学时间。但若您迟到时间太长（10分钟以上），老师有权视为学生缺席，由于您自身原因导致旷课缺席的情况下，该节课的课时/费用不予退还。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num3.png" alt=""></div>
                            <h3>如果我已经购买了课程，但是临时有事不能上课了，可以申请取消课程改天再上吗？</h3>
                            <div class="bg-wrap">
                                <p>若距离开课时间在3个小时以上，可通过APP、微信、在线QQ客服、400电话取消课程，课时将自动返还到您的账户；课缺席的情况下，该节课的课时/费用不予退还；若因本站原因，导致已安排好的课程无法正常进行，本站有义务退还该节课时，您可联系客服另行安排课程，或申请相应的延期补偿。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num4.png" alt=""></div>
                            <h3>为什么每节课只有25分钟？</h3>
                            <div class="bg-wrap">
                                <p>对于英语非母语的学员而言，40-45分钟/节的课程过于漫长，会令自身筋疲力尽，注意力无法集中，所学的知识也难以完全消化。我们将一堂课的时间分解，缩短为25分钟，让学员可以充分利用业（课）余时间展开学习，集中精神与老师互动，充分发挥自身的学习能动性，提升学习效率。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num5.png" alt=""></div>
                            <h3>如果上课中途老师或我网络掉线了，我该怎么办？</h3>
                            <div class="bg-wrap">
                                <p>若老师掉线，请及时联系在线客服确认老师的网络情况，确认能否及时恢复课程，若因此造成该节课终止，客服将为您申请该课时的返还；若您掉线，请迅速检查您的网络状态，确认是否能够重新联网，若网络持续故障，请及时告知客服，以便客服通知老师该节课因意外终止，该节课的课时/费用不予退还。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num6.png" alt=""></div>
                            <h3>我购买套餐后，是否能选择我喜欢的试课老师为我上课？</h3>
                            <div class="bg-wrap">
                                <p>视乎您试课的老师是否在您选购的套餐可选范围内（国际套餐或定制套餐），您可联系在线客服为您查询。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num7.png" alt=""></div>
                            <h3>国际套餐和定制套餐的区别是什么？</h3>
                            <div class="bg-wrap">
                                <p>国际套餐是珂莎的明星产品，深受学员欢迎。国际套餐内含月套餐与次套餐，可以多维度满足长短期英语学习需求。定制套餐则注重学员的专属体验，针对有特定培训需要的单人学员或企业，量身定制整体的学习计划。</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-3 col-xs-4">
                        <div class="wrap">
                            <div class="img-wrap"><img src="/picture/plans-num8.png" alt=""></div>
                            <h3>我的套餐可以匹配哪些老师？</h3>
                            <div class="bg-wrap">
                                <p>若您购买的是国际套餐，将根据您设定的上课时间段以及当前课程匹配国际套餐的老师，老师长期生活工作在官方语言或母语为英语的国家， 若您购买的是定制套餐，将根据您的要求为您匹配定制套餐的老师。</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('foot')

@endsection
