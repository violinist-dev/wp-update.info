<footer class="content-info">
  <div class="container-fluid p-3 text-center text-white bg-dark">
    このサイトのバージョン：WordPress {{ get_bloginfo('version') }} / PHP {{ PHP_MAJOR_VERSION }}.{{ PHP_MINOR_VERSION }}.{{ PHP_RELEASE_VERSION }}

    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
