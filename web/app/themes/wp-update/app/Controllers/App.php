<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    /**
     * @return string
     */
    public function phpVersion(): string
    {
        return PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION;
    }

    /**
     * @return string
     */
    public static function category(): string
    {
        $html = '';

        $cats = get_the_category();

        if (empty($cats)) {
            return '';
        }

        foreach ($cats as $cat) {
            $html .= sprintf(
                '<a href="%s" class="badge badge-pill badge-secondary">%s</a>',
                get_category_link($cat->term_id),
                $cat->cat_name
            );
        }

        return $html;
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
}
