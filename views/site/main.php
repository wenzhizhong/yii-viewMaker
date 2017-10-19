<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/4
 * Time: 9:20
 */
use backend\assets\AppAsset;
use yii\helpers\Html;

?>
<?=Html::cssFile('layui/common/bootstrap/css/bootstrap.css')?>
<?=Html::cssFile('css/layui/main.css')?>
<section class="larry-wrapper">
    <!-- overview -->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol userblue"> <i class="iconpx-users"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count1">110</h1>
                    </a>
                    <p>用户总量</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol commred"> <i class="iconpx-user-add"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count2">10</h1>
                    </a>
                    <p>今日注册用户</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol articlegreen">
                    <i class="iconpx-file-word-o"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count3">100</h1>
                    </a>
                    <p>订单总数</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol rsswet">
                    <i class="iconpx-check-circle"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count4">10</h1>
                    </a>
                    <p>待确认订单数</p>
                </div>
            </section>
        </div>
    </div>
    <!-- overview end -->
    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading bm0">
                    <span class='span-title'>网站概览</span>
                    <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                </header>
                <div class="panel-body" >
                    <table class="table table-hover personal-task">
                        <tbody>
                        <tr>
                            <td>
                                <strong>版本信息</strong>： 版本名称：<a href="http://www.bmob.cn">Yii2</a> 版本号: V01_UTF8_0.10

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>开发作者</strong>： Ewing

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>网站域名</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>网站目录</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>服务器IP</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>服务器环境</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>数据库版本</strong>： 未定义

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>最大上传限制</strong>： 未定义

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>当前登录用户</strong>： <span class="current_user">未定义</span>

                            </td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- 网站信息统计｛SEO数据统计｝ -->
            <section class="panel">
                <header class="panel-heading bm0">
                    <span class='span-title'>网站信息统计｛SEO数据统计｝</span>
                    <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                </header>
                <div class="panel-body laery-seo-box">
                    <div class="larry-seo-stats" id="larry-seo-stats"></div>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <!-- 快捷操作 -->
            <section class="panel">
                <header class="panel-heading bm0">
                    <span class='span-title'>快捷操作</span>
                    <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                </header>
                <div class="panel-body">
                    <table class="table table-hover personal-task shortcut">
                        <tr>
                            <td>
                                <div class="c1">1</div>
                                <div class="c2">2</div>
                                <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
            <!-- 系统公告 -->
            <section class="panel">
                <header class="panel-heading bm0">
                    <span class='span-title'>系统公告</span>
                    <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                </header>
                <div class="panel-body">
                    <table class="table table-hover personal-task shortcut">
                        <tr>
                            <td>
                                <div class="c1">1</div>
                                <div class="c2">2</div>
                                <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
            <!-- 最新文章 -->
            <section class="panel">
                <header class="panel-heading bm0">
                    <span class='span-title'>最新文章</span>
                    <span class="badge" style="background-color:#FF3333;"> new </span>
                    <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                </header>
                <div class="panel-body">
                    <table class="table table-hover personal-task">
                        <tbody>
                        <tr>
                            <td>原创</td>
                            <td>
                                <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                            </td>
                            <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11 10:00:37</td>
                        </tr>
                        <tr>
                            <td>原创</td>
                            <td>
                                <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                            </td>
                            <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11 10:00:37</td>
                        </tr>
                        <tr>
                            <td>原创</td>
                            <td>
                                <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                            </td>
                            <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11 10:00:37</td>
                        </tr>
                        <tr>
                            <td>原创</td>
                            <td>
                                <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                            </td>
                            <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11 10:00:37</td>
                        </tr>
                        <tr>
                            <td>原创</td>
                            <td>
                                <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                            </td>
                            <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11 10:00:37</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

</section>

<?php $this->beginBlock('service') ?>

layui.use(['jquery','layer','element'],function(){
window.jQuery = window.$ = layui.jquery;
window.layer = layui.layer;
window.element = layui.element();

$('.panel .tools .iconpx-chevron-down').click(function(){
var el = $(this).parents(".panel").children(".panel-body");
if($(this).hasClass("iconpx-chevron-down")){
$(this).removeClass("iconpx-chevron-down").addClass("iconpx-chevron-up");
el.slideUp(200);
}else{
$(this).removeClass("iconpx-chevron-up").addClass("iconpx-chevron-down");
el.slideDown(200);
}
})

});
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['service'], \yii\web\View::POS_END); ?>
<?php
$this->registerJsFile('layui/jsplug/echarts.min.js', ['depends' => 'yii\web\YiiAsset', 'position' => \yii\web\View::POS_END]);
$this->registerJsFile('layui/js/main.js', ['depends' => 'yii\web\YiiAsset', 'position' => \yii\web\View::POS_END]);
?>

