<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
          href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.css">
    <script nonce="feae7d5c-5ab2-4df9-916c-860699a22aa3">(function (w, d) {
            !function (t, u, v, w) {
                t[v] = t[v] || {};
                t[v].executed = [];
                t.zaraz = {deferred: [], listeners: []};
                t.zaraz.q = [];
                t.zaraz._f = function (x) {
                    return async function () {
                        var y = Array.prototype.slice.call(arguments);
                        t.zaraz.q.push({m: x, a: y})
                    }
                };
                for (const z of ["track", "set", "debug"]) t.zaraz[z] = t.zaraz._f(z);
                t.zaraz.init = () => {
                    var A = u.getElementsByTagName(w)[0], B = u.createElement(w),
                        C = u.getElementsByTagName("title")[0];
                    C && (t[v].t = u.getElementsByTagName("title")[0].text);
                    t[v].x = Math.random();
                    t[v].w = t.screen.width;
                    t[v].h = t.screen.height;
                    t[v].j = t.innerHeight;
                    t[v].e = t.innerWidth;
                    t[v].l = t.location.href;
                    t[v].r = u.referrer;
                    t[v].k = t.screen.colorDepth;
                    t[v].n = u.characterSet;
                    t[v].o = (new Date).getTimezoneOffset();
                    if (t.dataLayer) for (const G of Object.entries(Object.entries(dataLayer).reduce(((H, I) => ({...H[1], ...I[1]})), {}))) zaraz.set(G[0], G[1], {scope: "page"});
                    t[v].q = [];
                    for (; t.zaraz.q.length;) {
                        const J = t.zaraz.q.shift();
                        t[v].q.push(J)
                    }
                    B.defer = !0;
                    for (const K of [localStorage, sessionStorage]) Object.keys(K || {}).filter((M => M.startsWith("_zaraz_"))).forEach((L => {
                        try {
                            t[v]["z_" + L.slice(7)] = JSON.parse(K.getItem(L))
                        } catch {
                            t[v]["z_" + L.slice(7)] = K.getItem(L)
                        }
                    }));
                    B.referrerPolicy = "origin";
                    B.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(t[v])));
                    A.parentNode.insertBefore(B, A)
                };
                ["complete", "interactive"].includes(u.readyState) ? zaraz.init() : t.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <div class="form-inline ml-auto">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('')}}"
                           style="background-color: transparent; transition: background-color 0.3s;"
                           onmouseover="this.style.backgroundColor='#1E90FF';"
                           onmouseout="this.style.backgroundColor='transparent';">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('users.list')}}">
                            <span data-feather="home" class="align-text-bottom"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <p> Users</p>

                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                            <p>

                                Manage Company

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                            </svg>
                            <p>
                                Manage Candidate
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('category.list')}}" class="nav-link">
                            <i class="fas fa-briefcase"></i>
                            <p>
                                Category

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('manage.job')}}" class="nav-link">
                            <i class="fas fa-briefcase"></i>
                            <p>
                                Manage Job Post

                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{route('recent.joblist')}}" class="nav-link">
                            <span><i class="far fa-edit"></i></span>
                            Create Job Post

                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="fas fa-newspaper"></i>
                            <p>
                                Blogs
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="fas fa-envelope"></i>
                            <p>

                                Contact

                            </p>
                        </a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.login')}}"
                           style="background-color: transparent; transition: background-color 0.3s;"
                           onmouseover="this.style.backgroundColor='#1E90FF';"
                           onmouseout="this.style.backgroundColor='transparent';">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>


                </ul>
            </nav>

        </div>

    </aside>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>


            </div>
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </section>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>

    <script
        src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>


    <script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(session()->has('success'))
        toastr.success('{{ session()->get('success') }}');
        @elseif(session()->has('error'))
        toastr.error('{{ session()->get('error') }}');
        @endif
    </script>
</body>
</html>
