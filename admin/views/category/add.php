<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/equation/html/semi-dark-menu/app-ecommerce-product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 11:42:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Ecommerce Create | EQUATION - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/equation/html/src/assets/img/favicon.ico" />
    <link href="../../../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../../../layouts/semi-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" href="../../../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../../../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/src/tagify/tagify.css">

    <link rel="stylesheet" type="text/css" href="../../../src/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/light/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/light/tagify/custom-tagify.css">
    <link href="../../../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../../../src/assets/css/dark/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/dark/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/dark/tagify/custom-tagify.css">
    <link href="../../../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="../../../src/assets/css/light/apps/ecommerce-create.css">
    <link rel="stylesheet" href="../../../src/assets/css/dark/apps/ecommerce-create.css">

    <link href="../../../layouts/semi-dark-menu/css/dark/structure-mod.html" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/light/structure-mod.html" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">

            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo">
                    <div class="nav-item theme-logo">
                        <a href="index.php">
                            <img src="../../assets/images/conbo-removebg-preview.png" alt="logo">
                        </a>
                    </div>
                    <div class="nav-item theme-text">
                        <a href="index.php" class="nav-link"> Admin </a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevrons-left">
                            <polyline points="11 17 6 12 11 7"></polyline>
                            <polyline points="18 17 13 12 18 7"></polyline>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Home</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                        <li>
                            <a href="index.php"> Notification </a>
                        </li>

                    </ul>
                </li>

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg><span>APPLICATIONS</span></div>
                </li>


                <li class="menu active">
                    <a href="#invoice" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-book">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                            <span>Category</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled show" id="invoice" data-bs-parent="#accordionExample">
                        <li>
                            <a href="?act=dsdm"> List </a>
                        </li>
                        <li class="active">
                            <a href="?act=adddm"> Add </a>
                        </li>
                    </ul>
                </li>




                <li class="menu ">
                    <a href="#ecommerce" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            <span>Product</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled " id="ecommerce" data-bs-parent="#accordionExample">

                        <li>
                            <a href="?act=dssp"> List </a>
                        </li>
                        <li>
                            <a href="?act=addsp"> Add </a>
                        </li>

                    </ul>
                </li>
                <li class="menu">
                    <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-pen-tool">
                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="M2 2l7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg>
                            <span>Blog</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                        <!-- <li>
                            <a href="app-blog-grid.html"> Grid </a>
                        </li> -->
                        <li>
                            <a href="?act=dsbv"> List </a>
                        </li>
                        <li>
                            <a href="?act=addbv"> Create </a>
                        </li>
                        <!-- <li>
                            <a href="app-blog-edit.html"> Edit </a>
                        </li> -->
                    </ul>
                </li>
                <li class="menu">
                    <a href="?act=dslh" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-map-pin">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="?act=dsacc" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Users</span>
                        </div>
                    </a>
                </li>



            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">

        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <div class="row mb-4 layout-spacing layout-top-spacing">

                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputEmail3" name="name_category"
                                            placeholder="Category Name">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="row mb-4">
                                        <!-- <label for="product-images">Upload Images</label>
                                        <div class="multiple-file-upload">
                                            <input type="file"  name="img"
                                                    id="product-images">
                                            <input type="file" name="img" id="">
                                        </div> -->
                                        <div class="p">
                                            <label for="formFile-1" class="form-label">Upload Images</label>
                                            <input type="file" class="form-control" name="img" id="formFile-1"
                                                required />
                                        </div>

                                    </div>

                                    <!-- <div class="col-md-4 text-center">
                                <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                                    <input class="switch-input" type="checkbox" role="switch" id="showPublicly"
                                        checked>
                                    <label class="switch-label" for="showPublicly">Display publicly</label>
                                </div>
                            </div> -->

                                </div>

                            </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="row">
                            <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                                <div class="widget-content widget-content-area ecommerce-create-section">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success w-100" name="themmoi"
                                                value="Add Product">
                                        </div>

                                        <!-- <div class="col-xxl-12 mb-4">
                                        <div
                                         
                                            class="switch form-switch-custom switch-inline form-switch-secondary">
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="in-stock">
                                            <label class="switch-label" for="in-stock">In Stock</label>
                                        </div>
                                    </div> -->
                                        <!-- <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="proCode">Product Code</label>
                                        <input type="text" class="form-control" id="proCode" value="">
                                    </div>
                                    <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="proSKU">Product SKU</label>
                                        <input type="text" class="form-control" id="proSKU" value="">
                                    </div>
                                    <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="gender">Gender</label>
                                        <select class="form-select" id="gender">
                                            <option value="">Choose...</option>
                                            <option value="men">Men</option>
                                            <option value="women">Women</option>
                                            <option value="kids">Kids</option>
                                            <option value="unisex">Unisex</option>
                                        </select>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


        <!-- END MAIN CONTAINER -->

        <script src="../../../src/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../../../src/plugins/src/mousetrap/mousetrap.min.js"></script>
        <script src="../../../src/plugins/src/waves/waves.min.js"></script>
        <script src="../../../layouts/semi-dark-menu/app.js"></script>
        <script src="../../../src/plugins/src/highlight/highlight.pack.js"></script>
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../../../src/plugins/src/editors/quill/quill.js"></script>
        <script src="../../../src/plugins/src/filepond/filepond.min.js"></script>
        <script src="../../../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
        <script src="../../../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
        <script src="../../../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
        <script src="../../../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
        <script src="../../../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
        <script src="../../../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
        <script src="../../../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

        <script src="../../../src/plugins/src/tagify/tagify.min.js"></script>

        <script src="../../../src/assets/js/apps/ecommerce-create.js"></script>

        <!-- <script>
     function send(){
        Swal.fire(
    'Successful!',
    'Successful order!',
    'success'
)
      }
</script> -->