<?php

function searchCategory(array $categories, $id)
{
    $name = '';
    function recursion($category, $id, &$name)
    {
        if ($category['id'] == $id) {
            $name = $category['title'];
            return;
        }
        if (!isset($category['children'])) {
            return;
        }
        foreach ($category['children'] as $children) {
            recursion($children, $id, $name);
        }
    }   

    foreach ($categories as $category) {
        recursion($category, $id, $name);
    }
    return $name;
}
