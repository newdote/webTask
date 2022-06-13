<?php

use yii\helpers\Url;

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;

foreach ($categories as $model) : ?>
    <div class="categories-post">
        <a href="<?= Url::to(['categories/view', 'id' => $model->id]) ?>">
            <h3 class="categories-title"><?= $model->title ?></h2>
        </a>
    </div>
<?php endforeach; ?>