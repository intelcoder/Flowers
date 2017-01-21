
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}"  />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="theme-color" content="#db5945">
  </head>
  <body>
    <div id="app">
      <top-nav></top-nav>
      <router-view></router-view>
      <side-nav></side-nav>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>
    </div>
    <script src="/js/bundle.js"></script>
  </body>
</html>
