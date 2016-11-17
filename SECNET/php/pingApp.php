<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ping($host) {
    
    exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
    return $rval === 0;
}

$host = '192.168.1.2';
$up = ping($host);
$faClass = ($up) ? 'fa-check-square-o' : 'fa-close';
echo sprintf('<i class="fa %s"></i> %s', $faClass, $host);