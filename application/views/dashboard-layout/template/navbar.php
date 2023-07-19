    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= $title ?></li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0"><?= $title ?></h6>
                </nav>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center me-3">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-toggle p-0 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="navbarDropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="fixed-plugin-button-nav cursor-pointer">
                                    <img src="<?= base_url('assets/dashboard/images/user.png'); ?>" class="avatar avatar-sm  me-1 ">
                                </div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="<?=site_url('profil')?>">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="<?= base_url('assets/dashboard/images/user.png'); ?>" class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h5 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold"><?= ucfirst($this->session->userdata('nama')) ?></span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="<?= site_url('logout'); ?>" id="btn-logout">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-danger me-3 my-auto">
                                                <i class="fas fa-sign-in-alt py-2"> </i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Logout</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>