<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <title>Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
        <link href="../../../public/admin/assets/css/icons.css" rel="stylesheet">
        <link href="../../../public/admin/assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../public/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link href="../../../public/admin/assets/css/dashboard.css" rel="stylesheet" type="text/css">
        <link href="../../../public/admin/assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">
        <link href="../../../public/admin/assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />
        <link href="../../../public/admin/assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../public/admin/assets/plugins/select2/select2.css">

    </head>
    <body class="app sidebar-mini rtl" >
        <div id="global-loader" ></div>
        <div class="page">
            <div class="page-main">
                <!-- Sidebar menu-->
                <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
                <aside class="app-sidebar ">
                    <div class="sidebar-img">
                        <a class="navbar-brand" href="../../../admin" style="color: green">rofaFerme</a> 
                        <ul class="side-menu">
                            <ul class="side-menu">
                                <li class="slide">
                                    <a class="side-menu__item active" href="../../../admin"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="../../produit/liste"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Produits</span></a>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" href="../../employe/liste"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Employés</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="../../equipement/list"><i class="side-menu__icon fe fe-truck"></i><span class="side-menu__label">Equipements</span></a>
                                </li>
                            </ul>
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
                                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="../../../admin"></a>

                                    <!-- Brand -->
                                    <a class="navbar-brand pt-0 d-md-none" href="../../../admin">
                                        <img src="public/admin/assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
                                    </a>

                                    <!-- User -->
                                    <ul class="navbar-nav align-items-center ">
                                        <li class="nav-item dropdown">
                                            <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="../../../admin" role="button">
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
                                                <a class="dropdown-item" href="../../add"><i class="ni ni-single-02"></i> <span>Ajouter un administrateur</span></a>
                                                <a class="dropdown-item" href="../../edit"><i class="ni ni-settings-gear-65"></i> <span>Modifer mon passe</span></a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="../../logout"><i class="ni ni-user-run"></i> <span>Se Déconnecter</span></a>
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
                                        <li class="breadcrumb-item"><a href="../../../admin" style="color: green">Acceuil</a></li>
                                    </ol>
                                    <div class="btn-group mb-0">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../../produit/add"><i class="fas fa-plus mr-2"></i>Ajouter un produit</a>
                                            <a class="dropdown-item" href="../../employe/add"><i class="fas fa-plus mr-2"></i>Ajouter un employé</a>
                                            <a class="dropdown-item" href="../../equipement/add"><i class="fas fa-plus mr-2"></i>Ajouter un equipement</a>
                                            <a class="dropdown-item" href="../../add"><i class="fas fa-plus mr-2"></i>Ajouter un administrateur</a>

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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="../../../public/admin/#top" id="back-to-top" style="background-color: green"><i class="fa fa-angle-up"></i></a>

        <script src="../../../public/admin/assets/plugins/jquery/dist/jquery.min.js"></script>
        <script src="../../../public/admin/assets/js/popper.js"></script>
        <script src="../../../public/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../public/admin/assets/js/select2.js"></script>


        <script src="../../../public/admin/assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

        <script src="../../../public/admin/assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

        <script src="../../../public/admin/assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Ansta JS -->
        <script src="../../../public/admin/assets/js/custom.js"></script>
        <script src="../../../public/admin/assets/js/dashboard-sales.js"></script>

        <!--Select2 js-->
        <script src="../../../public/admin/assets/plugins/select2/select2.full.js"></script>

        <!-- file uploads js -->
        <script src="../../../public/admin/assets/plugins/fileuploads/js/dropify.min.js"></script>



        <script>
            $('.dropify').dropify({
                messages: {
                    'default': 'Cliquer pour Charger l\'image du produit',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
        </script>
    </body>

</html>