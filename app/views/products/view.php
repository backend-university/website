<?php

/* @var $this yii\web\View */
/* @var $product Product */

use app\assets\AppPrismCodeHighlightAsset;
use app\models\product\Product;
use yii\helpers\Html;
use yii\helpers\Url;

AppPrismCodeHighlightAsset::register($this);

$this->title = Html::encode($product->name);
$this->params['breadcrumbs'][] = $this->title;
/** @var bool[][] $tabs */
$tabs = [
    'screencast' => [
        'enabled' => !empty($product->youtube_src),
        'active' => !empty($product->youtube_src),
    ],
    'theory' => [
        'enabled' => !empty($product->theory),
        'active' => !empty($product->theory) && empty($product->youtube_src),
    ],
    'commands' => [
        'enabled' => !empty($product->instructions),
        'active' => !empty($product->instructions) && empty($product->youtube_src) && empty($product->theory),
    ],
];
?>

<section class="main_feature_two section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="section-title text-center">
                    <h1><?= $this->title ?></h1>
                    <span></span>
                    <p>
                        <?= Html::encode($product->description) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs nav-justified" role="tablist" id="product-tabs">
                            <li class="nav-item">
                                <a class="nav-link <?= $tabs['screencast']['active'] ? 'active' : '' ?> <?= !$tabs['screencast']['enabled'] ? 'disabled' : '' ?>" href="#screencast" id="screencast-tab" role="tab" data-toggle="tab" aria-controls="screencast" aria-selected="true"><i class="fa fa-video-camera"></i> Скринкаст</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $tabs['theory']['active'] ? 'active' : '' ?> <?= !$tabs['theory']['enabled'] ? 'disabled' : '' ?>" href="#theory" id="theory-tab" role="tab" data-toggle="tab" aria-controls="theory" aria-selected="false"><i class="fa fa-bookmark"></i> Теория</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $tabs['commands']['active'] ? 'active' : '' ?> <?= !$tabs['commands']['enabled'] ? 'disabled' : '' ?>" href="#commands" id="commands-tab" role="tab" data-toggle="tab" aria-controls="commands" aria-selected="false"><i class="fa fa-paperclip"></i> Список комманд</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="tab-content col-12">
                        <div class="tab-pane <?= $tabs['screencast']['active'] ? 'active' : '' ?>" id="screencast" role="tabpanel" aria-labelledby="screencast-tab">
                            <div class="col-12">
                                <div class="single-feature-two">
                                    <i class="fa fa-video-camera"></i>
                                    <?php if ($tabs['screencast']['enabled']) : ?>
                                        <h4>Скринкаст процесса</h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= Html::encode($product->name) ?></h5>
                                                <p class="card-text"><?= Html::encode($product->screencast_description) ?></p>
                                            </div>
                                            <div class="card-img-bottom video-container">
                                                <?php if ($product->youtube_src) : ?>
                                                    <iframe id="ytplayer" type="text/html" width="640" height="360"
                                                            src="<?= Url::to($product->youtube_src) ?>"
                                                            frameborder="0"></iframe>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane <?= $tabs['theory']['active'] ? 'active' : '' ?>" id="theory" role="tabpanel" aria-labelledby="theory-tab">
                            <div class="col-12 aos-init aos-animate" data-aos="fade-up">
                                <div class="single-feature-two">
                                    <i class="fa fa-bookmark"></i>
                                    <?php if ($tabs['theory']['enabled']) : ?>
                                        <h4>Теория</h4>
                                        <div>
                                            <?= $product->theory ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane <?= $tabs['commands']['active'] ? 'active' : '' ?>" id="commands" role="tabpanel" aria-labelledby="commands-tab">
                            <div class="col-12 aos-init aos-animate" data-aos="fade-up">
                                <div class="single-feature-two">
                                    <i class="fa fa-paperclip"></i>
                                    <?php if ($tabs['commands']['enabled']) : ?>
                                        <h4>Реализация</h4>
                                        <div>
                                            <?= $product->instructions ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="tab-content col-12">
                        <div id="disqus_thread"></div>
                        <script>
                            var disqus_config = function () {
                            /*this.page.url = '..';  // Replace PAGE_URL with your page's canonical URL variable*/
                            this.page.identifier = 'product_<?= $product->id ?>';
                            };
                            (function() {
                                var d = document, s = d.createElement('script');
                                s.src = 'https://backend-university-ru.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>