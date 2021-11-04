<?php

namespace common\helpers;

class MenuHelper
{


    public static function checkMegaMenu($menu): bool
    {
        if (!empty($menu['children'])) {
            foreach ($menu['children'] as $i => $child) {
                if (!empty($child['children']))
                    return true;

                return false;
            }
        }
        return false;
    }

}