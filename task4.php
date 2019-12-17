<?php

function correctTags(array $arrTags)
{
    $stack = [];
    foreach ($arrTags as $tag) {
        if (substr_count($tag, '/') == 0) {
            array_push($stack, $tag);
        } else {
            if (count($stack) == 0) {
                return false;
            }
            $openTag = array_pop($stack);
            if ($openTag !== substr_replace($tag, '', 1, 1)) {
                return false;
            }
        }
    }
    return (count($stack) == 0);
}
