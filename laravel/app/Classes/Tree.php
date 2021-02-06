<?php

namespace App\Classes;

class Tree
{
    public static function getTree($categories)
    {
        $tree = [];
        foreach ($categories as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            }
            else {
                $categories[$node['parent_id']]['children'][$node['id']] = &$node;
            }
        }
        return $tree;
    }
}
