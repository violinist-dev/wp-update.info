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
}
