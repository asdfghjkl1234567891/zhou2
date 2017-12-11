<?php
header("content-type:text/html;charset=utf-8");

use yii\helpers\Html;

use yii\widgets\ActiveForm;

?>

<?php $form=ActiveForm::begin();?>
 <?= $form->field($model,'username')?>

<?=$form->field($model, 'content')->textarea(['rows'=>3]) ?>
    <?= Html::submitButton('Submit',['class'=>'btn btn-primary'])?>

</div>
<?php $form->end();?>