<?php


namespace frontend\controllers;


use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\OaI;
use Yii;
use yii\web\Controller;

class SearchController extends Controller
{
    public function actionNews()
    {
        $new = Options::findOne(['slug' => 'news']);
        $newIds = OaI::find()->select('item_id')->where(['option_id' => $new->id])->column();
        if ($value = Yii::$app->request->get('search')) {
            $news = Items::find()
                ->orFilterWhere(['like', 'text_1_0', $value])
                ->orFilterWhere(['like', 'text_1_1', $value])
                ->orFilterWhere(['like', 'text_1_2', $value])
                ->orFilterWhere(['like', 'text_1_3', $value])
                ->orFilterWhere(['like', 'text_1_4', $value])
                ->andWhere(['id' => $newIds])
                ->all();
        }
        return $this->render('news', [
            'news' => $news,
            'option' => $new
        ]);
    }
}