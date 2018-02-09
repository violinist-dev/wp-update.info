<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    /**
     * front-page.blade.php の $users
     *
     * @return array
     */
    public function users()
    {
        //1ページに全部表示。必要になったら調整。
        //        $number = 100;

        $args = [
            'order'        => 'ASC',
            'count_total'  => false,
            'orderby'      => 'user_registered',
            //            'number'       => $number,
            'meta_key'     => 'active',
            'meta_value'   => '1',
            'meta_compare' => '=',
        ];

        $user_query = new \WP_User_Query($args);

        $users = $user_query->get_results();

        //表示順はランダム
        shuffle($users);

        return $users;
    }
}
