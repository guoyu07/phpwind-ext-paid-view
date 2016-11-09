<?php

namespace Pw\Ext\MedzPaidView\Service\Srv;

class AdminMenuDo
{
    public function getAdmins(array $menus = array())
    {
        $menus['app-medz-paid-view'] = array(
            '付费查看',
            'app/manage/*?app=MedzPaidView',
            '',
            '',
            'appcenter',
        );

        return $menus;
    }
}
