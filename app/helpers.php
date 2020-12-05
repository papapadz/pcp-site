<?php
if (! function_exists('randomStr')) {

    function randomStr($num) {
        return \Illuminate\Support\Str::random($num);
    }
}
?>