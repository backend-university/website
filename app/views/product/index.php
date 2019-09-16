<?php

/* @var $this yii\web\View */

use app\models\SubscribeForm;
use yii\widgets\ActiveForm;

$this->title = 'Продукты Backend University';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="products-features section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <h4>Первые продукты в разработке прямо сейчас</h4>
                <p>
                    Вы получите новости о статусе разработок в ближайшее время, если подпишетесь на рассылку
                    или подпишетесь на <a href="https://vk.com/backenduniversity">группу вконтакте</a>, ну или вернетесь проведать через неделю-две
                    <br><br>
                    <?php ActiveForm::begin(['action' => '/subscribe']) ?>
                        <div class="input-group input-group-lg newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Введите Email">
                            <button type="submit" name="subscribe" class="btn-newsletter-bg col-md-3 col-sm-12 mt-md-0 mt-2">Подписаться!</button>
                        </div>
                    <?php ActiveForm::end() ?>
                    <br><br>
                    <a href="/">Вернуться на главную</a>
                </p>
            </div>
        </div>
    </div>
</section>