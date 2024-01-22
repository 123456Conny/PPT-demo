<?php $__env->startSection('head'); ?>
    <style>
        #about .info p {
            text-indent: 2em;
            font-size: 18px;
            line-height: 1.5;
        }
        .promise{
            padding-bottom:10px;
        }
        .promise a{
            text-decoration:underline;font-size:16px;color:#b81c25;font-weight:bold;
        }
        #main{
            margin-top: 9%;
        }
        .text-center-sty{
            color: #565656;
            padding: 1em 0 1em 0;
            border-bottom: 1px solid #F2F2F2;
            margin-top: 78px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="main hidden-xs visible-sm-* visible-md-* visible-lg-*" id="main">
        <section id="about">
            <div class="container">
                <div class="page-tit2"><h2>关于我们</h2></div>
                <div class="page-con clearfix">
                    <h3>About  Us</h3>
                    <div class="info clearfix">
                        <div class="col-md-4 col-sm-4 col-xs-12 img-wrap">
                            <img src="picture/about.jpg" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12 txt-wrap">
                            <p>珂莎英语，创建于2023年6月，是的全球化“互联网+”教育企业之多年来专注于在线英语培训业务。</p>
                            <p>目前，公司总部位于中国杭州，曾分别在中国香港、中国上海、杭州等地设立办公室。</p>
                            <p>近年来公司处于快速发展阶段。珂莎英语与英国外教机构达成战略合作，由为珂莎英语的授课老师颁发资质证书，同时珂莎英语上线外教资质查询平台，完成外教资质的对外公示。</p>
                            <p>多家权威电视台、报纸聚焦珂莎英语公益事业，对珂莎英语的师资、产品以及服务等方面进行全方位多角度报道。</p>
                            <p>珂莎英语续借助科技赋能教育，助力公益，坚持打造高品质产品与服务。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\phpEnv\www\demo.com\course_demo\resources\views/about.blade.php ENDPATH**/ ?>