<?php

namespace App;

use Sober\Controller\Controller;

use WP_User_Query;

use App\Models\User;

class FrontPage extends Controller
{
    const NUMBER = 1;

    /**
     * front-page.blade.php の $users
     *
     * @return mixed
     */
    public function users()
    {
        // Eloquent使うか迷い中
        //        $perPage = max(env('USER_NUMBER'), self::NUMBER);
        //        $page = max(1, get_query_var('page', 1));
        //
        //        $users = User::with('meta')
        //                     ->whereHas('meta', function ($query) {
        //                         $query->where('meta_key', '=', 'active')
        //                               ->where('meta_value', '1');
        //                     })
        //                     ->oldest('user_registered')
        //                     ->paginate($perPage, null, null, $page);

        $number = max(env('USER_NUMBER'), self::NUMBER);

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
     * @param int $total
     *
     * @return string
     */
    public static function pagination(int $total): string
    {
        $number = max(env('USER_NUMBER'), self::NUMBER);

        if ($total <= $number) {
            return '';
        }

        $args = [
            'format'  => '?page=%#%',
            'total'   => ceil($total / $number),
            'current' => max(1, get_query_var('page', 1)),
        ];

        $html = paginate_links($args);

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

        $html = str_replace($search, $replace, $html);

        return '<ul class="pagination">' . $html . '</ul>';
    }
}
