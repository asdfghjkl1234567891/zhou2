<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/27 0027
 * Time: 15:47
 */
header("content-type:text/html;charset=utf-8");
use yii\helpers\Html;

use yii\helpers\Url;

use yii\widgets\LinkPager;
use DfaFilter\SensitiveHelper;

$wordData = array(
    '111',
    '拆迁灭',
    '车牌隐',
    '成人电',
    '成人卡通'

);

?>
<a href="<?= Url::toRoute(['student/save']);?>">添加</a>
欢迎<?=$name?>登录
<table border="1">
    <tr>
        <td>ID</td>
        <td>标题</td>
        <td>内容</td>
        <td>发表人</td>
<!--        <td>年龄</td>-->
<!--        <td>爱好</td>-->
        <td>操作</td>
    </tr>
    <?php foreach ($list as  $val):?>
    <tr>
        <td><?= $val['id']?></td>

        <td><?=$filterContent = SensitiveHelper::init()->setTree($wordData)->replace($val['username'], '***');?></td>
        <td><?=$filterContent = SensitiveHelper::init()->setTree($wordData)->replace($val['content'], '***');?></td>

<!--        <td>--><?//=Html::encode($val['username'])?><!--</td>-->
<!--        <td>--><?//=Html::encode($val['content'])?><!--</td>-->
        <td><?=$name?></td>


        <td>
            <a href="<?= Url::toRoute(['student/del','id'=>$val['id']]);?>">删除</a>
            <a href="<?= Url::toRoute(['student/save','id'=>$val['id']]);?>">修改</a>
        </td>

    </tr>
    <?php endforeach;?>

</table>
<?= LinkPager::widget(['pagination'=>$pagination])?>



