<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Mainslider;
use app\models\Staff;
use app\models\Aboutinfrormation;
use app\models\Percenttable;
use app\models\Services;
use app\models\Portfoliophotos;
use app\models\Category;
use app\models\Workingteam;
use app\models\Forms;
use app\models\Aboutsection;
use app\models\Hidayahlinks;

class SiteController extends Controller
{
    /** 
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $forms = new Forms();
        $sliders = Mainslider::find() -> all();
        $staffs = Staff::find() -> all();
        $aboutinfo = Aboutinfrormation::find() -> all();
        $percentsLeft = Percenttable::find() ->where(['status'=> 1])-> all();
        $percentsRight = Percenttable::find() ->where(['status'=>2])-> all();
        $services = Services::find() -> all();
        $mainsliders = Mainslider::find() -> all();
        $portfoliophotos = Portfoliophotos::find() -> all();
        $categorys = Category::find() -> all();
        $workingteam = Workingteam::find() -> all();
        $aboutsection = Aboutsection::find() -> all();
        $hidayahlinks = Hidayahlinks::find() -> all();

        if ($this->request->isPost) {
            if ($forms->load($this->request->post()) && $forms->save()) {
                return $this->redirect(['/site/index']);
            }
        } 

        return $this->render('index',[
            'slide' => $sliders,
            'staffs' => $staffs,
            'aboutinfo' => $aboutinfo,
            'percentsLeft' => $percentsLeft,
            'percentsRight' => $percentsRight,
            'services' => $services,
            'mainsliders' => $mainsliders,
            'portfoliophotos' => $portfoliophotos,
            'categorys' => $categorys,
            'workingteam' => $workingteam,
            'forms' => $forms,
            'aboutsection' => $aboutsection,
            'hidayahlinks' => $hidayahlinks,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
