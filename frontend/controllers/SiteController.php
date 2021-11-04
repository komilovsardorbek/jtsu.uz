<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\OaI;
use common\models\Feedback;
use Exception;
use Yii;
use yii\caching\TagDependency;
use yii\captcha\CaptchaAction;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ErrorAction;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $notificationOption = Options::findOne(['slug' => 'notifications']);
        $notificationIds = OaI::find()->select('item_id')->where(['option_id' => $notificationOption->id])->column();

        $choiceOption = Options::findOne(['slug' => 'choices']);
        $choiceIds = OaI::find()->select('item_id')->where(['option_id' => $choiceOption->id])->column();

        $newsOption = Options::findOne(['slug' => 'news']);
        $newIds = OaI::find()->select('item_id')->where(['option_id' => $newsOption->id])->column();

        return $this->render('index', [
                'notifications' => Items::find()
                    ->where(['id' => $notificationIds])
                    ->andWhere(['!=', 'text_1' . "_" . Yii::$app->params['cms']['languageIds'][Yii::$app->language], ""])
                    ->orderBy('date_0 DESC')->limit(3)->all(),
                'notificationOption' => $notificationOption,
                'news' => Items::find()
                    ->where(['id' => $newIds])
                    ->andWhere(['!=', 'text_1' . "_" . Yii::$app->params['cms']['languageIds'][Yii::$app->language], ""])
                    ->orderBy('date_0 DESC')->limit(3)->all(),
                'newsOption' => $newsOption,
                'choices' => Items::find()
                    ->where(['id' => $choiceIds])
                    ->andWhere(['!=', 'text_1' . "_" . Yii::$app->params['cms']['languageIds'][Yii::$app->language], ""])
                    ->orderBy('date_0 DESC')->limit(3)->all(),
                'choiceOption' => $choiceOption,
                'photoGallery' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'photo-gallery'])->id])->orderBy('date_0 DESC')->limit(3)->all(),
                'videoGallery' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'video-gallery'])->id])->orderBy('date_0 DESC')->limit(3)->all(),
                'videoEntity' => Entities::findOne(['slug' => 'video-gallery']),
                'photoEntity' => Entities::findOne(['slug' => 'photo-gallery']),
                'partners' => Items::getAll('partners'),
                'resources' => Items::getAll('resources'),
                'interactiveServices' => Items::getAll('interactive-services'),
                'mainCards' => Items::getAll('main-cards'),
            ]
        );
    }

    private function getAll($slug, int $limit = null)
    {
        $cache = Yii::$app->getModule('cms')->cache;
        $cacheDuration = Yii::$app->getModule('cms')->cacheDuration;
        return Yii::$app->{$cache}->getOrSet('items_' . $slug, function () use ($slug, $limit) {
            if (!$limit)
                $limit = 10000;
            return Items::find()->where(['entity_id' => Entities::findOne(['slug' => $slug])->id])->limit($limit)->all();

        }, $cacheDuration, new TagDependency(['tags' => ['items_' . $slug]]));
    }

    public function actionContacts()
    {
        $model = new Feedback();
        $this->contact($model);

        return $this->render('contact', [
            'model' => $model
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function contact($model)
    {
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                $model->save();
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } catch (Exception $e) {
                Yii::$app->session->setFlash('error', 'An error occurred' . $e->getMessage());
            }
            return $this->refresh();
        }
        return $model;
    }

    public function actionSearch($q = '')
    {
        $langId = Yii::$app->params['l'][Yii::$app->language];
        $dataProvider = new ActiveDataProvider([
            'query' => Items::find()
                ->andFilterWhere(['or',
                    ['entity_id' => Entities::findOne(['slug' => 'pages'])->id],
                    ['entity_id' => Entities::findOne(['slug' => 'blog'])->id],
                ])
                ->andFilterWhere(['or',
                    ['like', 'text_1_' . $langId, $q],
                    ['like', 'text_2_' . $langId, $q],
                    ['like', 'text_3_' . $langId, $q],
                    ['like', 'text_4_' . $langId, $q],
                    ['like', 'text_5_' . $langId, $q],
                    ['like', 'text_6_' . $langId, $q],
                    ['like', 'text_7_' . $langId, $q],
                ]),
            'pagination' => [
                'pageSize' => 9,
            ]
        ]);
        return $this->render('search', [
            'dataProvider' => $dataProvider,
            'search' => $q,
            'lastItems' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'pages'])->id])->orderBy('date_0 DESC')->limit(3)->all(),
            'title' => Yii::t('app', 'Search results')
        ]);

    }

}
