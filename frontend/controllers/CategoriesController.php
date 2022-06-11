<?php

namespace frontend\controllers;

use frontend\models\Categories;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Categories controller
 */
class CategoriesController extends Controller
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
        $model = Categories::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('Page not Found');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
