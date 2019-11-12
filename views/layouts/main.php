<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            [
                'label' => 'Data Master',
                'items' =>[
                    ['label' => 'golongan', 'url' => ['/golongan/index']],
                    ['label' => 'instansi', 'url' => ['/instansi/index']],
                    ['label' => 'jabatan_users', 'url' => ['/jabatan_users/index']],
                    ['label' => 'kategori_surat', 'url' => ['/kategori_surat/index']],
                    ['label' => 'kategori_sk', 'url' => ['/kategori_sk/index']],
                    ['label' => 'sifat', 'url' => ['/sifat/index']],
                    ['label' => 'Jabatan', 'url' => ['/jabatan/index']],
                    ['label' => 'User', 'url' => ['/users/index']],
                ],
            ],
            [
                'label' => 'Data SM-SK',
                'items' =>[
                    '<li class="dropdown-header">Data Surat Keluar</li>',
                        ['label' => 'approval_re', 'url' => ['/approval_re/index']],
                        ['label' => 'approval_sk', 'url' => ['/approval_sk/index']],
                        ['label' => 'Surat Keluar', 'url' => ['/surat_keluar/index']],
                        ['label' => 'Approval Rules Node', 'url' => ['/appoval_rn/index']],
                    '<li class="dropdown-header">Data Surat Masuk</li>',
                        ['label' => 'Surat Masuk', 'url' => ['/surat_masuk/index']],
                        ['label' => 'Disposisi_re', 'url' => ['/disposisi_re/index']],
                        ['label' => 'Disposisi_rn', 'url' => ['/disposisi_rn/index']],
                        ['label' => 'Disposisi_sm', 'url' => ['/disposisi_sm/index']],
                ],
            ],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Prisil@Pens-SBY <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
