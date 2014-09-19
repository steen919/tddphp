<?php
/**
 * Created by IntelliJ IDEA.
 * User: stefan
 * Date: 2014-09-19
 * Time: 18:57
 */

class Wrapper {
    function wrap($text, $lineLength) {
        if (strlen($text) > $lineLength)
            return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
        return $text;
    }
}