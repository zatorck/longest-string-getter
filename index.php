<?php
$object = new DateTime();
try {
    echo getLongestString('sds', 'sadsa', 'sadsa', 'asdasdsadsa');
} catch (Exception $e) {
    echo $e;
}

/**
 * Get lognest string
 *
 * @param string $firstString
 * @param string $secondString
 * @param string $string, ...
 *
 * @return string
 * @throws Exception
 */
function getLongestString(string $firstString, string $secondString)
{
    $biggestStrlen = 0;
    $longestString = '';
    foreach (func_get_args() as $k => $param) {
        if (!is_string($param)) {
            throw new Exception('Invalid type for param no.'.($k + 1));
        }
        $strlen = strlen($param);
        if ($strlen > $biggestStrlen) {
            $biggestStrlen = $strlen;
            $longestString = $param;
        }
    }

    return $longestString;

}
