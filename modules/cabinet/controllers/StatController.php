<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 07.04.2018
 * Time: 22:18
 */

namespace app\modules\cabinet\controllers;


use yii\web\Controller;
use app\models\Count;
use Yii;


class StatController extends Controller
{
    public function actionIndex()
    {
        $count_model = new Count();
        $condition = [];
        $days_ago = null;
        $stat_ip = false;

        if ($count_model->load(Yii::$app->request->post())) {
            if ($count_model->reset) {
                $condition = [];
            }
            //Вывод по дате
            if ($count_model->date_ip) {
                $timeUnix = strtotime($count_model->date_ip);
                $time_max = $timeUnix + 86400;
                $condition = ["between", "date_ip", $timeUnix, $time_max];
            }
            //За период
            if ($count_model->start_time) {

                $timeStartUnix = strtotime($count_model->start_time);
                //Если не передана дата конца - ставим текущую
                if (!$count_model->stop_time) {
                    $timeStopUnix = time();
                } else {
                    $timeStopUnix = strtotime($count_model->stop_time);
                }
                $timeStopUnix += 86400; //целый день (до конца суток)
                $condition = ["between", "date_ip", $timeStartUnix, $timeStopUnix];
            }
            //По IP
            if ($count_model->ip) {
                $condition = ["ip" => $count_model->ip];
                $days_ago = 86400 * 30; //за 30 дней
                $stat_ip = true;
            }
            //Получение списка статистики
            $count_ip = $count_model->getCount($condition, $days_ago);
            /*
             * Устанавливаем значение полей по-умолчанию для вывода в полях формы
             */


            $count_model->date_ip = time(); //сегодня
            $count_model->start_time = date('Y-m-01'); //первое число текущего месяца
            $count_model->stop_time = time(); //сегодня

            //Удаление данных старше 90 дней
//            public function remove_old(){
//                $today = time();
//                $old_time = $today - (86400*90);
//                $old = self::find()->where(['<','date_ip', $old_time])->all();
//                foreach($old as $str){
//                    $str->delete();
//                }
//                echo '<p class="red">Удалено '. count($old) . ' строк.</p>';
//            }
        }
        return $this->render('index',[
            'count_model'=> $count_model,
            'count_ip'=> $count_ip, //статистика
            'stat_ip' => $stat_ip, //true если фильтр по определенному IP
        ]);
    }



}