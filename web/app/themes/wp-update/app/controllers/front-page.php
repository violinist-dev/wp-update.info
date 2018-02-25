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
        $page = max(1, get_query_var('page', 1));

        $args = [
            //ランダム表示:rand
            //登録順:user_registered
            'orderby'      => 'user_registered',
            'order'        => 'ASC',
            'count_total'  => true,
            'number'       => self::NUMBER,
            'offset'       => ($page - 1) * self::NUMBER,
            'meta_key'     => 'active',
            'meta_value'   => '1',
            'meta_compare' => '=',
        ];

        $users = new WP_User_Query($args);

        return $users;
    }

    /**
     * @param int $total
     *
     * @return string
     */
    public static function pagination(int $total): string
    {
        if ($total <= self::NUMBER) {
            return '';
        }

        $args = [
            'format'  => '?page=%#%',
            'type'    => 'array',
            'total'   => ceil($total / self::NUMBER),
            'current' => max(1, get_query_var('page', 1)),
        ];

        $pages = paginate_links($args);

        $html = str_replace('page-numbers', 'page-link', implode('', $pages));

        $html = str_replace('<a', '<li class="page-item"><a', $html);
        $html = str_replace('</a>', '</li></a>', $html);

        $html = str_replace('<span', '<li class="page-item active"><span', $html);
        $html = str_replace('</span>', '</li></a>', $html);

        return '<ul class="pagination">' . $html . '</ul>';
    }
}
