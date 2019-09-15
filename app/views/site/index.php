<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;

$this->title = 'Backend University - Симулятор бэкенда';
?>
<section class="main_feature_two section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="section-title text-center">
                    <h1>Симулятор бэкенда</h1>
                    <span></span>
                    <p>
                        Система обучения и подкрепления знаний, основанная на практике
                    </p>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12  text-center">
                <div class="single_future_img_one">
                    <img class="img-responsive" src="/img/product-1.jpg" alt="">
                </div>
            </div><!-- END COL-->
            <div class="col-md-6 col-sm-12 col-xs-12 p-5">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="single-feature-two">
                            <i class="fa fa-star"></i>
                            <h4>ПРОСТОТА</h4>
                            <p>Готовые сценарии: можно как запустить урок одной командой, так и самому разобрать поэтапно каждый шаг.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="single-feature-two">
                            <i class="fa fa-ship"></i>
                            <h4>ВОЗМОЖНОСТИ</h4>
                            <p>Практическое применение полученных навыков в реальных проектах. Использование получившейся инфраструктуры микроПК под домашние проекты.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-sm-12 col-xs-12 aos-init" data-aos="fade-up">
                        <div class="single-feature-two">
                            <i class="fa fa-cog"></i>
                            <h4>ПРАКТИЧЕСКИЕ НАВЫКИ</h4>
                            <p>Вы сможете освоить или отточить навыки использования востребованных технологий, необходимых веб-разработчику и администратору линукс:</p>
                            <div style="padding-left: 20px">
                                <ul>
                                    <li>реализации деплоя</li>
                                    <li>сбора логов</li>
                                    <li>бэкапов</li>
                                    <li>горизонтального масштабирования</li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
            </div><!-- END COL-->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="row">
                    <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="text-center">
                            <h1>Схема работы:</h1>
                            <div>
                                <ul style="list-style: inside;">
                                    <li>Приобретаешь подходящие микроПК</li>
                                    <li>Устанавливаешь наши практические занятия</li>
                                    <li>Решаешь их на реальном железе</li>
                                    <li>Изучаешь необходимую теорию не заранее, а в процессе</li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END COL-->
            </div><!-- END ROW -->
        </div>
    </div>
</section>
<section id="pricing" class="products-features section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="section-title text-center">
                    <h1>Подпишись!</h1>
                    <p>
                        В ближайшее время появится больше деталей.
                    </p>
                    <span></span>
                    <?php ActiveForm::begin(['action' => '/subscribe']) ?>
                        <div class="input-group input-group-lg newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Введите Email">
                            <button type="submit" name="subscribe" class="btn-newsletter-bg col-md-3 col-sm-12 mt-md-0 mt-2">Подписаться!</button>
                        </div>
                        <div id="mce-responses">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                    <?php ActiveForm::end() ?>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER-->
</section>
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="section-title text-center">
                    <h1>Архитектурные эксперименты</h1>
                    <p>
                        Обучение и тренировка построения сервисов
                    </p>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                <div>
                    <div class="single-feature text-center">
                        <img class="col-sm-12" src="https://camo.githubusercontent.com/e45e39c36eebcc4c66e1aecd4e4145112d8e88e3/687474703a2f2f692e696d6775722e636f6d2f6a6a3341354e382e706e67">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                <div>
                    <h4> Учись строить системы больших масштабов</h4>
                    <p>
                        Изучение того, как строить масштабируемые системы, поможет вам стать лучшим инженером.
                        Архитектура таких систем - широкая тема.
                        Огромное количество ресурсов по принципам их построения разбросано по интернету.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="row">
                    <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="text-center">
                            <h1>Занимаясь практикой</h1>
                            <p>
                                Не потрогав вещи руками, знания о них можно быстро растерять. Да и идеи без реализации не несут в себе такой большой пользы.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="single-feature text-center img-responsive">
                            <img class="col-sm-6" src="/img/product/scheme-front1.jpg" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="single-feature">
                            <img class="col-sm-12" src="/img/product/scheme-async1.jpg" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="single-feature">
                            <img class="col-sm-12" src="/img/product/scheme-storage1.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="row">
                    <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                        <div class="section-title text-center">
                            <h1>Как все это работает в реальности?</h1>
                            <p>
                                С чего начать построение? Какие требования у элементов инфраструктуры?
                                Как они узнают друг о друге, когда в системе тысячи элементов?
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <h4>Теоретические задачи</h4>
                        <div class="ul-list">
                            <ul>
                                <li>Сервера</li>
                                <li>Сеть</li>
                                <li>Ротация логов</li>
                                <li>Безопасность (фаервол, например)</li>
                                <li>Мониторинг</li>
                                <li>Обновления</li>
                                <li>Деплой</li>
                                <li><b>Масштабирование</b></li>
                                <li>И всякое другое, что требует проб и ошибок</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 aos-init aos-animate" data-aos="fade-up">
                        <h4>Изучить на практике</h4>
                        <div class="ul-list">
                            <b>Нужно только</b>:
                            <ul>
                                <li>Приобрести микроПК</li>
                                <li>Устанавливать наши практические занятия (автоматическая установка и настройка нужного софта)</li>
                                <li>Решать их на реальном железе</li>
                                <li>Изучать теорию по вопросам из практики</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pricing-2" class="products-features section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="section-title text-center">
                    <h1>Хочу знать!</h1>
                    <p>
                        Уведомим вас о готовых продуктах и их частях.
                    </p>
                    <span></span>
                    <?php ActiveForm::begin(['action' => '/subscribe']) ?>
                        <div class="input-group input-group-lg newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Введите Email">
                            <button type="submit" name="subscribe" class="btn-newsletter-bg col-md-3 col-sm-12 mt-md-0 mt-2">Подписаться!</button>
                        </div>
                        <div id="mce-responses-2">
                            <div class="response" id="mce-error-response-2" style="display:none"></div>
                            <div class="response" id="mce-success-response-2" style="display:none"></div>
                        </div>
                    <?php ActiveForm::end() ?>
                </div>
                <div class="text-center">
                    Since 2018, <a href="http://borisd.ru/">borisd.ru</a>
                </div>
            </div>
        </div>
    </div>
</section>