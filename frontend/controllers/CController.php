<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\OaI;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;


class CController extends Controller
{
    public function actionCollection(string $c)
    {
        if ($c === 'faculties') {
            return $this->render('faculties', [
                'faculties' => Options::getAll('faculties'),
                'title' => (Collections::findOne(['slug' => $c]))->getName(),
                'cathedra' => null,
            ]);
        }
    }

    public function actionOption(string $c, string $o)
    {
        if ($c === 'staff-types') {
            $staffTypeOption = Options::findOne(['slug' => $o]);
            $staffTypeOptionIds = OaI::find()->select('item_id')->where(['option_id' => $staffTypeOption->id])->column();
            $lastStaff = Items::find()->where(['id' => $staffTypeOptionIds])->orderBy('text_7_0 ASC')->all();
            return $this->render('management-list', [
                'lastStaff' => $lastStaff,
                'staffTypeOption' => $staffTypeOption,
            ]);
        }

        if ($c === 'blog-categories') {
            $new = Options::findOne(['slug' => $o]);
            $newIds = OaI::find()->select('item_id')->where(['option_id' => $new->id])->column();
            return $this->render('news-list', [
                'option' => $new,
                'news' => Items::find()->where(['id' => $newIds])->orderBy('date_0 DESC')->all()
            ]);
        }

        if ($c === 'faculties') {
            $faculty = Options::findOne(['slug' => $o]);
            $query = OaI::find()->select('item_id')->where(['option_id' => $faculty->id])->column();
            $staffTypesWorking = OaI::find()->select('item_id')->where(['option_id' => Options::findOne(['slug' => 'working'])->id])->column();
            $stuffsWorking = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'staff'])->id])->andWhere(['id' => $query])->andWhere(['id' => $staffTypesWorking])->orderBy('text_7_0 ASC')->all();
            $staffTypesHonorary = OaI::find()->select('item_id')->where(['option_id' => Options::findOne(['slug' => 'honorary'])->id])->column();
            $stuffsHonorary = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'staff'])->id])->andWhere(['id' => $query])->andWhere(['id' => $staffTypesHonorary])->orderBy('text_7_0 ASC')->all();
            $cathedras = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'cathedra'])->id])->andWhere(['id' => $query])->all();
            return $this->render('facultet-view', [
                'faculty' => $faculty,
                'facultieCategories' => Options::getAll('faculties'),
                'stuffsWorking' => $stuffsWorking,
                'honors' => $stuffsHonorary,
                'cathedrasCategories' => $cathedras,
            ]);
        }

        if ($c === 'site-sections') {
            $option = Options::findOne(['slug' => $o]);
            $OptionsIds = OaI::find()->select('item_id')->where(['option_id' => $option->id])->column();
            return $this->render('pages-list', [
                'items' => Items::find()->where(['id' => $OptionsIds])->orderBy('date_0 DESC')->all(),
                'option' => $option,
            ]);
        }

        if ($c === 'admission') {
            $option = Options::findOne(['slug' => $o]);
            $OptionsIds = OaI::find()->select('item_id')->where(['option_id' => $option->id])->column();
            return $this->render('pages-list', [
                'items' => Items::find()->where(['id' => $OptionsIds])->orderBy('date_0 ASC')->all(),
                'option' => $option,
            ]);
        }
    }

    public function actionEntity(string $e)
    {
        if (in_array($e, ['video-gallery', 'boxing-videogallery'])) {
            $items = Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->orderBy('date_0 DESC');
            $countQuery = clone $items;
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 9]);
            $models = $items->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            return $this->render('video', [
                'entity' => Entities::findOne(['slug' => $e]),
                'items' => $models,
                'pages' => $pages,
            ]);
        }

        if ($e === 'photo-gallery') {
            $items = Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->orderBy('date_0 DESC');
            $countQuery = clone $items;
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 9]);
            $models = $items->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('photos', [
                'items' => $models,
                'pages' => $pages,
            ]);
        }

        if ($e === 'interactive-services') {
            return $this->render('interactive-services', [
                'interactiveServices' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->all(),
            ]);
        }

        if ($e === 'cathedra') {
            return $this->render('faculties', [
                'faculties' => Items::getAll('cathedra'),
                'cathedra' => true,
                'title' => (Entities::findOne(['slug' => $e]))->getName()
            ]);
        }
    }

    public function actionItem(string $e, int $i)
    {
        if ($e === 'blog') {
            $item = Items::findOne($i);
            $category = Options::findOne($item->options['blog-categories']);
            $itemIds = OaI::find()->select('item_id')->where(['option_id' => $category->id])->column();
            $item = Items::findOne($i);
            $item->updateViewsCount();
            return $this->render('news-view', [
                'item' => $item,
                'category' => $category,
                'categories' => Options::getAll('blog-categories'),
                'lastItems' => Items::find()
                    ->where(['id' => $itemIds])
                    ->andWhere(['!=', 'text_1' . "_" . Yii::$app->params['l'][Yii::$app->language], ""])
                    ->orderBy('date_0 DESC')
                    ->limit(6)
                    ->all(),
                'test' => $item->entity->text_2 <= 0 || !empty($item->getText2()),
            ]);
        }

        if ($e === 'photo-gallery') {
            return $this->render('photo', [
                'item' => Items::findOne($i),
            ]);
        }

        if ($e === 'state-symbols') {
            return $this->render('symbol', [
                'items' => Items::findOne($i),
                'lastItems' => Items::find()->orderBy('date_0 DESC')->limit(6)->all(),
            ]);
        }

        if ($e === 'cathedra') {
            return $this->render('cathedra-view', [
                'cathedra' => $cathedra = Items::findOne($i),
                'faculty' => $faculty = Options::findOne($cathedra->options['faculties']),
                'facultieCategories' => Options::getAll('faculties'),
                'cathedrasCategories' => Items::find()->where(['id' => OaI::find()->select('item_id')->where(['option_id' => $faculty->id])->column()])->all(),
            ]);
        }

        if ($e === 'staff') {
            return $this->render('staff-view', [
                'item' => $item = Items::findOne($i),
                'facultieCategories' => Options::getAll('faculties'),
                'staffType' => Options::findOne(['id' => $item->options['staff-types']]),
                'relatedStaff' => Items::find()->where(['id' => OaI::find()->select('item_id')->where(['option_id' => $item->options['staff-types']])->column()])->orderBy('text_7_0 ASC')->all(),
            ]);
        }

        if ($e === 'pages') {
            $item = Items::findOne($i);
            $sectionsCategory = Options::findOne($item->options['site-sections']);
            $itemIds = OaI::find()->select('item_id')->where(['option_id' => $sectionsCategory->id])->column();
            return $this->render('pages', [
                'item' => Items::findOne($i),
                'option' => Options::findOne([$item->options['site-sections']]),
                'category' => $sectionsCategory,
                'categories' => Options::getAll('site-sections'),
                'collection' => Collections::findOne(['slug' => 'site-sections']),
                'lastItems' => Items::find()->where(['id' => $itemIds])->orderBy('date_0 DESC')->limit(6)->all(),
            ]);
        }

        if ($e === 'admission-pages') {
            $item = Items::findOne($i);
            $sectionsCategory = Options::findOne($item->options['admission']);
            $itemIds = OaI::find()->select('item_id')->where(['option_id' => $sectionsCategory->id])->column();
            return $this->render('pages', [
                'item' => Items::findOne($i),
                'option' => Options::findOne([$item->options['admission']]),
                'category' => $sectionsCategory,
                'categories' => Options::getAll('admission'),
                'collection' => Collections::findOne(['slug' => 'admission']),
                'lastItems' => Items::find()->where(['id' => $itemIds])->orderBy('date_0 DESC')->limit(6)->all(),
            ]);
        }
    }
}
