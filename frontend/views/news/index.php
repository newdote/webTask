<?php

use yii\helpers\Url;

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php foreach ($news as $model) : ?>
                <div class="col-lg-4">
                    <a href="<?= Url::to(['news/view', 'id' => $model->id]) ?>">
                        <h2><?= $model->title ?></h2>
                    </a>
                    <p>Category: <a href="<?= Url::to(['categories/view', 'id' => $model->category_id]) ?>"><?= $model->category_id ?></a></p>
                    <p><?= $model->description ?></p>
                    <p><a class="btn btn-outline-secondary" href="<?= Url::to(['news/view', 'id' => $model->id]) ?>">Open &raquo;</a></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>