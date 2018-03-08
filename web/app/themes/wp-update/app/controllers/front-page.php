<?php

namespace App;

use Sober\Controller\Controller;

use WP_User_Query;

class FrontPage extends Controller
{
    const NUMBER = 1;

    /**
     * front-page.blade.php の $users
     *
     * @return WP_User_Query
     */
    public function users(): WP_User_Query
    {
        $number = env('USER_NUMBER') ?? self::NUMBER;

        $page = max(1, get_query_var('page', 1));

        $args = [
            //ランダム表示:rand
            //登録順:user_registered
            'orderby'      => 'user_registered',
            'order'        => 'ASC',
            'count_total'  => true,
            'number'       => $number,
            'offset'       => ($page - 1) * $number,
            'meta_key'     => 'active',
            'meta_value'   => '1',
            'meta_compare' => '=',
        ];

        $users = new WP_User_Query($args);

        return $users;
    }

    /**
     * ユーザーリストのページネーション
     *
     * @param int $total
     *
     * @return string
     */
    public static function pagination(int $total): string
    {
        $number = env('USER_NUMBER') ?? self::NUMBER;

        if ($number >= $total) {
            return '';
        }

        $args = [
            'format'  => '?page=%#%',
            'total'   => ceil($total / $number),
            'current' => max(1, get_query_var('page', 1)),
        ];

        $search = [
            'page-numbers',
            '<a',
            '</a>',
            '<span',
            '</span>',
        ];

        $replace = [
            'page-link',
            '<li class="page-item"><a',
            '</li></a>',
            '<li class="page-item active"><span',
            '</li></a>',
        ];

        $html = str_replace($search, $replace, paginate_links($args));

        return '<ul class="pagination">' . $html . '</ul>';
    }
}
