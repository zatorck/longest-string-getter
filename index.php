<?php
declare(strict_types=1);

//try {
echo getLongestString('sds', 's', 3,'sadsa', 's', 'sadsa', 'asdasdsadsa');
//} catch (InvalidArgumentException $e) {
//    echo $e;
//}

/**
 * @param string $firstString
 * @param string $secondString
 * @param string ...$params
 *
 * @return string
 */
function getLongestString(string $firstString, string $secondString, string ...$params)
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
