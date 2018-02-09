<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class author extends Controller
{
    /**
     * author.blade.php の $user
     *
     * @return array
     */
    public function user()
    {
        $user = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

        return $user;
    }
}
