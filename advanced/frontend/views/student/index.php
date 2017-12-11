<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/28 0028
 * Time: 12:21
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form=ActiveForm::begin(['action'=>'?r=student/index']);?>
<table>
    <tr>
        <td>账号</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>密码</td>
        <td><input type="password" name="pwd"></td>
    </tr>
    <tr>

    </tr>
</table>
<?= Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php $form->end();?>