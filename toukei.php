<?php

// 標準偏差の関数
function stats_standard_deviation($ary) {
        // 平均取得
        $avg = round(array_sum($ary)/count($ary),1);

        // 各値の平均値との差の二乗【(値-平均値)^2】を算出
        $diff_ary = array();
        foreach ($ary as $val) {
                $diff = $val-$avg;
                $diff_ary[] = pow($diff,2);
        }

        // 上記差の二乗の合計を算出
        $diff_total = array_sum($diff_ary);
        // 平均を算出
        $diff_avg   = $diff_total/count($diff_ary);

        // 平方根を取る(標準偏差)
        $stdev = sqrt($diff_avg);
        // 標準偏差を返す
        return $stdev;
}
// N個の整数をセット
$Numbers = array(90,30,53,45,60);
$count = count($Numbers);
$sum  = array_sum($Numbers);
$max = max($Numbers);
$min = min($Numbers);
$average = round($sum/$count,1);
echo "セットされた数字の<BR>個数:".$count."最大:".$max."最小:".$min."平均:".$average."標準偏差:".round(stats_standard_deviation($Numbers),1);


?>
