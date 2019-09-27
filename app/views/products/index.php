<?php

/* @var $this yii\web\View */
/* @var $dataProvider DataProviderInterface */

use app\models\product\Product;
use yii\data\DataProviderInterface;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Продукты Backend University';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <h4>Продукты</h4>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'tableOptions' => ['class' => 'table table-hover table-pointer'],
                    'showHeader' => false,
                    'layout' => "{items}\n{pager}\n{summary}",
                    'columns' => [
                        'name' => [
                            'attribute' => 'name',
                            'value' => function (Product $model) {
                                return Html::a($model->name, '/products/' . $model->id);
                            },
                            'format' => 'html',
                        ],
                        'description:ntext',
                        'updated_at:date',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</section>
<section class="products-features section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <h4>Подпишитесь</h4>
                <p>
                    На нашу рассылку и получайте новости о статусе разработок, также у нас есть <a href="https://vk.com/backenduniversity">группа вконтакте</a>
                    <br><br>
                    <?php ActiveForm::begin(['action' => '/subscribe']) ?>
                        <div class="input-group input-group-lg newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Введите Email">
                            <button type="submit" name="subscribe" class="btn-newsletter-bg col-md-3 col-sm-12 mt-md-0 mt-2">Подписаться!</button>
                        </div>
                    <?php ActiveForm::end() ?>
                    <br>
                    <a href="/">Вернуться на главную</a>
                </p>
            </div>
        </div>
    </div>
</section>