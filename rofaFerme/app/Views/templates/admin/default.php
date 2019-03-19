<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"> 
        <title>Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
        <link href="public/admin/assets/css/icons.css" rel="stylesheet">
        <link rel="stylesheet" href="public/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link href="public/admin/assets/css/dashboard.css" rel="stylesheet" type="text/css">
        <link href="public/admin/assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">
        <link href="public/admin/assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />
        <link href="public/admin/assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">
        <link href="public/admin/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

    </head>
    <body class="app sidebar-mini rtl" >
        <div id="global-loader" ></div>
        <div class="page">
            <div class="page-main">
                <!-- Sidebar menu-->
                <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
                <aside class="app-sidebar ">
                    <div class="sidebar-img">
                        <a class="navbar-brand" href="admin" style="color: green">rofaFerme</a>                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item active" data-toggle="slide" href="public/admin/#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="public/admin/#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Produits</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li>
                                        <a href="admin/produit/liste" class="slide-item">Liste</a>
                                    </li>
                                    <li>
                                        <a href="admin/produit/add" class="slide-item">Ajouter</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="public/admin/#"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Employés</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li>
                                        <a href="admin/employe/liste" class="slide-item">Liste</a>
                                    </li>
                                    <li>
                                        <a href="admin/employe/add" class="slide-item">Ajouter</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="public/admin/#"><i class="side-menu__icon fe fe-truck"></i><span class="side-menu__label">Equipements</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li>
                                        <a href="admin/equipement/list" class="slide-item">Liste</a>
                                    </li>
                                    <li>
                                        <a href="admin/equipement/list" class="slide-item">Ajouter</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- Sidebar menu-->

                <!-- app-content-->
                <div class="app-content ">
                    <div class="side-app">
                        <div class="main-content">
                            <!-- Top navbar -->
                            <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                                <div class="container-fluid">
                                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="public/admin/#"></a>

                                    <!-- Brand -->
                                    <a class="navbar-brand pt-0 d-md-none" href="public/admin/index-2.html">
                                        <img src="public/admin/assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
                                    </a>

                                    <!-- User -->
                                    <ul class="navbar-nav align-items-center ">
                                        <li class="nav-item dropdown">
                                            <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="public/admin/#" role="button">
                                                <div class="media align-items-center">
                                                    <div class="media align-items-center">
                                                        <i class="fe fe-user f-30 "></i>
                                                    </div>
                                                    <div class="media-body ml-2 d-none d-lg-block">
                                                        <span class="mb-0 "><?= $_SESSION['nom'] ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                                <div class=" dropdown-header noti-title">
                                                    <h6 class="text-overflow m-0">Bienvenue!</h6>
                                                </div>
                                                <a class="dropdown-item" href="admin/add"><i class="ni ni-single-02"></i> <span>Ajouter un administrateur</span></a>
                                                <a class="dropdown-item" href="admin/edit"><i class="ni ni-settings-gear-65"></i> <span>Modifer mon passe</span></a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="admin/logout"><i class="ni ni-user-run"></i> <span>Se Déconnecter</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Top navbar-->

                            <!-- Page content -->
                            <div class="container-fluid pt-8">
                                <div class="page-header mt-0 shadow p-3">
                                    <ol class="breadcrumb mb-sm-0">
                                        <li class="breadcrumb-item"><a href="admin" style="color: green">Acceuil</a></li>
                                    </ol>
                                    <div class="btn-group mb-0">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="admin/produit/add"><i class="fas fa-plus mr-2"></i>Ajouter un produit</a>
                                            <a class="dropdown-item" href="admin/employe/add"><i class="fas fa-plus mr-2"></i>Ajouter un employé</a>
                                            <a class="dropdown-item" href="admin/equipement/add"><i class="fas fa-plus mr-2"></i>Ajouter un equipement</a>
                                            <a class="dropdown-item" href="admin/add"><i class="fas fa-plus mr-2"></i>Ajouter un administrateur</a>

                                        </div>
                                    </div>
                                </div>


                                <?= $content; ?>

                                <!-- Footer -->
                                <footer class="footer">
                                    <div class="row align-items-center justify-content-xl-between">
                                        <div class="col-xl-8">
                                            <div class="copyright text-center text-xl-left text-muted">
                                                <p class="text-sm font-weight-500">Copyright 2019 © Binome N°1 (OURO AGORO Fad, DEFLY Akoko Rose) </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <p class="float-right text-sm font-weight-500"><a href="" style="color: green">Esiba</a></p>
                                        </div>
                                    </div>
                                </footer>
                                <!-- Footer -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- app-content-->
            </div>
        </div>
        <!-- Back to top -->
        <a href="public/admin/#top" id="back-to-top" style="background-color: green"><i class="fa fa-angle-up"></i></a>

        <!-- Ansta Scripts -->
        <!-- Core -->
        <script src="public/admin/assets/plugins/jquery/dist/jquery.min.js"></script>
        <script src="public/admin/assets/js/popper.js"></script>
        <script src="public/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Echarts JS -->
        <script src="public/admin/assets/plugins/chart-echarts/echarts.js"></script>

        <!-- Fullside-menu Js-->
        <script src="public/admin/assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

        <!-- Custom scroll bar Js-->
        <script src="public/admin/assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Ansta JS -->
        <script src="public/admin/assets/js/custom.js"></script>
        <script src="public/admin/assets/js/dashboard-sales.js"></script>

        <script src="public/admin/assets/plugins/sweet-alert/sweetalert.min.js"></script>
        <script>
            $(".sup").click(function () {
                var id = $(this).attr('rel');
                swal({title: "Êtes vous sûr de vouloir ce produit ?",
                    text: "Le produit ne pourra plus être récupéré",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd1331",
                    confirmButtonText: "supprimer",
                    closeOnconfirm: false
                },
                        function () {
                            window.location.href = "admin/produit/delete/" + id;
                        }
                );
            })
        </script>

        <script>
            $(".supa").click(function () {
                var id = $(this).attr('rel');
                swal({title: "Êtes vous sûr de vouloir cet employé ?",
                    text: "L'employé ne pourra plus être récupéré",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd1331",
                    confirmButtonText: "supprimer",
                    closeOnconfirm: false
                },
                        function () {
                            window.location.href = "admin/employe/delete/" + id;
                        }
                );
            })
        </script>

        <script>
            $(".supb").click(function () {
                var id = $(this).attr('rel');
                swal({title: "Êtes vous sûr de vouloir cet équipement ?",
                    text: "L'équipement ne pourra plus être récupéré",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd1331",
                    confirmButtonText: "supprimer",
                    closeOnconfirm: false
                },
                        function () {
                            window.location.href = "admin/equipement/delete/" + id;
                        }
                );
            })
        </script>

    </body>

</html>