<?php

namespace frontend\controllers;

use frontend\models\News;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * News controller
 */
class NewsController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionView($id)
    {
        $model = News::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('Page not Found');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
