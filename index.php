<?php

use ozhigin\MyLog;
use ozhigin\SquareEq;
use ozhigin\OzhiginException;

ini_set("display_errors", 1);
error_reporting(-1);

require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');
require_once('ozhigin/MyLog.php');
require_once('ozhigin/LineEq.php');
require_once('ozhigin/SquareEq.php');
require_once('ozhigin/OzhiginException.php');

try {
    echo "Enter 3 parameters a, b, c \n\r";

    $a = (float)readline();
    $b = (float)readline();
    $c = (float)readline();

    MyLog::log("The equation is introduced: $a*x^2 + $b*x + $c = 0");

    $squareEq = new SquareEq();
    $result = $squareEq->solve($a, $b, $c);

    MyLog::log('Equation roots: ' . implode('; ', $result));
} catch (OzhiginException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();