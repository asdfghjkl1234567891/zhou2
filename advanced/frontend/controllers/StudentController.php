<?php

namespace frontend\controllers;
//composer create-project laravel/laravel --prefer-dist my_laravel
use Yii;
use yii\db\query;
use  yii\web\Controller;
//use yii\web\Session ;
//use yii\base\ErrorException;
use frontend\models\Student;
use DfaFilter\SensitiveHelper;
use yii\data\Pagination;

class StudentController extends Controller{
    public function actionIndex(){

        if (Yii::$app->request->post()){
            $name=Yii::$app->request->post('name');
            $pwd=Yii::$app->request->post('pwd');

            $query = new Query();
            $res = $query->select(['name', 'pwd'])
                ->from('user')
                ->where(['name' =>$name,'pwd'=>$pwd ])
                ->one();

            if($res){

                $session=Yii::$app->session;
                $session->open();
//            $id=$session->get('id');
                $session->set('name',$name);
                return $this->redirect(['student/mess']);
            }else{
                echo "登录失败";
            }
        }else{
            return $this->render('index');
        }

    }

    public function actionMess(){

        $session = Yii::$app->session;
        $name = $session->get('name');
        $model=new Student();
        $pagination=new pagination([
            'defaultPageSize'=>3,
            'totalCount'=>$model->find()->count()
        ]);

        $list=$model->find()
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->asArray()
            ->all();


        return $this->render('mess',[
            'list'=>$list,
            'pagination'=>$pagination,
            'name'=>$name
        ]);

    }

    public function actionSave(){
        $model=new Student();
        if($model->load(Yii::$app->request->post())&&$model->validate()){
            if ($id=Yii::$app->request->get('id')){
                $model=$model->findOne($id);
                $post=Yii::$app->request->post('Student');
                $model->username=$post['username'];
                $model->content=$post['content'];



//                $model->age=$post['age'];
//                $model->hobby=implode(',',$post['hobby']);

            }
//            else{
//                $model->hobby=implode(',',$model->hobby);
//            }

            $res=$model->save();
            if($res){
                return $this->redirect(['student/mess']);
            }
        }else{
            if ($id=Yii::$app->request->get('id')){
                $model=$model->findOne($id);
//                $model->hobby=explode(',',$model->hobby);
            }
            return $this->render('save',['model'=>$model]);
        }

    }
    public function actionDel(){
        $id=Yii::$app->request->get('id');
//        print_r($id);die;
        $model=new Student();
        $res=$model->deleteAll('id=:id',[':id'=> $id]);
        if($res){
            return $this->redirect(['student/mess']);
        }

    }

    public function actionUpdate(){
        $model=new Student();
        if($model->load(Yii::$app->request->post())&&$model->validate()){
//            print_r(Yii::$app->request->post());die;

//            $model->hobby=implode(',',$model->hobby);
            $res=$model->save();
            if($res){
                return $this->redirect(['student/index']);
            }
        }else{
            if ($id=Yii::$app->request->get('id')){
                $model=$model->findOne($id);
            }
            return $this->render('add',['model'=>$model]);
        }
    }
}


?>