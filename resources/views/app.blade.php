
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}"  />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="theme-color" content="#db5945">
  </head>
  <body>
    <div id="app">
      <side-nav></side-nav>
      <top-nav></top-nav>
      <router-link to="/customers">index</router-link>
      <router-view></router-view>
    </div>
    <script src="/js/bundle.js"></script>

  </body>
</html>
