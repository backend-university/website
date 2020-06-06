<?php

/* @var $this yii\web\View */
/* @var $form SubscribeForm */
/* @var $adminEmail string */

use app\models\SubscribeForm;
use yii\widgets\ActiveForm;

$this->title = !$form->hasErrors() ? 'Спасибо за подписку!' : 'Ошибка';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="pricing" class="products-features section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <?php if ($form->subscribed) : ?>
                    <h4>Спасибо за подписку!</h4>
                    <p>
                        Вы получите новости о статусе разработок в ближайшее время.
                        <br><br>
                        <a href="/">Вернуться на сайт</a>
                    </p>
                <?php else : ?>
                    <h4>Ошибка</h4>
                    <p>
                        Что-то не получилось. Но я очень хочу рассказать вам о текущих наработках по проекту,
                        поэтому прошу вас написать мне на <a href="mailto:<?= $adminEmail ?>"><?= $adminEmail ?></a> или
                    </p>
                    <h5>Попробовать еще раз</h5>
                    <?php ActiveForm::begin(['action' => '/subscribe']) ?>
                        <div class="input-group input-group-lg newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Введите Email">
                            <button type="submit" name="subscribe" class="btn-newsletter-bg col-md-3 col-sm-12 mt-md-0 mt-2">Подписаться!</button>
                        </div>
                    <?php ActiveForm::end() ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
