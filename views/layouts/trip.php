<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23.09.15
 * Time: 16:09
 */
/* @var $content string */
/* @var $this \yii\web\View */

AppAsset::register($this);
$this->beginPage();

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerMetaTag(['name'=>'viewport', 'content'=>'width=device-width, initial-scale=1' ]); ?>
<title><?= Yii::$app->name ?></title>

    <?php $this->head(); ?>

</head>
<body>

<?php $this->beginBody(); ?>

<div class="wrap">

    <?php
    NavBar::begin(
        [
            'options'=>[
              'class'=>'navbar navbar-inverse navbar-fixed-top'
            ],
            'brandLabel'=>'Командировки',
            'brandUrl'=>[
                'index'
            ],
            'brandOptions'=>[
                'class'=>'navbar-mrand'
            ]

        ]

    );

    ActiveForm::begin([
       'action'=>['main/search'],
       'method'=>'post',
        'options'=>['class'=>'navbar-form navbar-right']
         ]
      );
    echo '<div class="input-group input-group-sm">';

    echo Html::input(
      'type:text',
      'search',
      '',
      [
          'placeholder'=>'Найти ...',
          'class'=>'form-control'
      ]
    );
    echo '<span class="input-group-btn">';
    echo Html::submitButton(
        '<span class="glyphicon glyphicon-search"></span>',
        [
            'class'=>'btn btn-success'
        ]
    );
    echo '</span></div>';
    ActiveForm::end();

    echo Nav::widget([
            'items'=>[
                [
                    'label'=>'Гланая <span class="glyphicon glyphicon-home"></span>',
                    'url'=>['main/index']

                ],

                [
                    'label'=>'О проекте <span class="glyphicon glyphicon-question-sign"></span>',
                    'url'=>['#'],
                    'linkOptions'=>[
                        'data-toggle'=>'modal',
                        'data-target'=>'#modal',
                        'style'=>'cursor: pointer; outline: none;'
                    ],

                ]


            ],
            'encodeLabels'=>false,
            'options'=>[
                'class'=>'navbar-nav navbar-right'

            ]
        ]

    );


   Modal::begin([
       'header'=> '<h2>Командировки</h2>',
       'id'=>'model'

   ]);
    echo 'Тестовый проект';
    Modal::end();



    NavBar::end();

    ?>

<div class="container">

    <?= $content ?>

</div>


    </div>


<footer class="footer">
    <div class="container">
        <span class="badge">

            <span class="glyphicon glyphicon-copyright-mark"></span>Командировки<?= date('Y') ?>

        </span>

    </div>


</footer>



<?php $this->endBody(); ?>

</body>
</html>

<?php
$this->endPage();