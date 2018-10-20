<?php
declare(strict_types=1);

$object = new DateTime();
//try {
    echo getLongestString('sds', 's','sadsa', 's', 'sadsa', 'asdasdsadsa');
//} catch (InvalidArgumentException $e) {
//    echo $e;
//}

/**
 * Get lognest string
 *
 * @param string $firstString
 * @param string $secondString
 * @param string $string , ...
 *
 * @return string
 * @throws Exception
 */
function getLongestString($firstString, $secondString)
{
    $biggestStrlen = 0;
    $longestString = '';
    foreach (func_get_args() as $k => $param) {
        if (!is_string($param)) {
            throw new InvalidArgumentException('Invalid type for param no. '.($k + 1));
        }
        $strlen = strlen($param);
        if ($strlen > $biggestStrlen) {
            $biggestStrlen = $strlen;
            $longestString = $param;
        }
    }

    return $longestString;

}
