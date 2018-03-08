<?php

namespace App;

use Sober\Controller\Controller;

use WP_User;

class author extends Controller
{
    /**
     * author.blade.php の $user
     *
     * @return \WP_User
     */
    public function user(): WP_User
    {
        $user = (get_query_var('author_name')) ? get_user_by('slug',
            get_query_var('author_name')) : get_userdata(get_query_var('author'));

        return $user;
    }

    /**
     * ユーザー投稿のページネーション
     *
     * @return string
     */
    public static function pagination(): string
    {
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

        $html = str_replace($search, $replace, paginate_links());

        return '<ul class="pagination">' . $html . '</ul>';
    }
}
