<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Democontroller
 */
class DemoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionLogin()
    {
        return $this->render('login');

    }
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionRegister()
    {
        return $this->render('register');
    }
    public function actionRecord()
    {
        return $this->render('record');
    }
    public function actionRefresh()
    {
        return $this->render('refresh');
    }
    public function actionCopy()
    {
        return $this->render('copy');
    }
    public function actionAccount()
    {
        return $this->render('account');
    }
    public function actionAddaccount()
    {
        return $this->render('addaccount');
    }
    public function actionMoney()
    {
        return $this->render('money');
    }
    public function actionRecharge()
    {
        return $this->render('recharge');
    }
    public function actionChange()
    {
        return $this->render('change');
    }
    public function actionRelease()
    {
        return $this->render('release');
    }
    public function actionButtons()
    {
        return $this->render('buttons');
    }
    public function actionTreeview()
    {
        return $this->render('treeview');
    }




}