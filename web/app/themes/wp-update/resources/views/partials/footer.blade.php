<footer class="content-info">
  <div class="container-fluid p-3 text-center text-white bg-dark">
    このサイトのバージョン：WordPress {{ get_bloginfo('version') }} / PHP {{ $php_version }}

    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
