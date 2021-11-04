<?php
namespace common\helpers;

use afzalroq\cms\entities\front\Items;
use Yii;

class NewsHelper
{


    public static function checkCount(Items $news)
    {
        $id = $news->id;
        $session = Yii::$app->session;
        $articles = $session->get('session_items');
        if (!isset($articles[$id])) {
            if (empty($articles)) {
                $articles = [
                    $id => $id
                ];
                $news->views_count += 1;
                $news->save();
            } else {
                $articles += [
                    $id => $id
                ];
                $articles = [
                    $id => $id
                ];
                $news->views_count += 1;
                $news->save();
            }
            $session->set('session_items', $articles);
            return $session->get('session_items');
        } else {
            $articles = [];
            return $session->get('session_items');
        }

    }

}