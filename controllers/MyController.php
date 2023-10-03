<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{

    public function behaviors()
    {
        return [
        ];
    }


    public function actionIndex($fio = 'Укажите ФИО')
    {
        return $fio;
    }
    public function actionAbouttwo()
    {
        return $this->render('abouttwo',[
            'kaketo'=>'Непонял'
        ]);
    }
    public function actionAbout()
    {
        return $this->render('about',[
            'hi'=>'Привет'
        ]);
    }
    public function actionlol()
    {
        return $this->render('lol',[
            'prikol'=>'Прикол'
        ]);
    }
}

