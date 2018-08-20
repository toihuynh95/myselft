<?php

    public function inTimeRange($time_start, $time_end, $time_needle) {
        $res = false;
        $t1 = strtotime("{$time_start}");
        $t2 = strtotime("{$time_end}");
        $tn = strtotime("{$time_needle}");
        if ($t1 >= $t2) $t2 = strtotime('+1 day', $t2);
        return ($tn >= $t1) && ($tn <= $t2); // or return ($tn > $t1) && ($tn < $t2);
    }
