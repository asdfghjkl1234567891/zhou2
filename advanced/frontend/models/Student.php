<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/27 0027
 * Time: 15:34
 */


namespace frontend\models;

use yii\db\ActiveRecord;


class Student extends ActiveRecord{

    public function rules(){
        return[
            [['username','content'],'required','message'=>'{attribute}不能为空！ ']
        ];
    }
    public function attributeLabels(){
        return [
            'username'=>'标题',
            'content'=>'内容',
//            'age'=>'年龄',
//            'hobby'=>'爱好'
        ];
    }


}

?>