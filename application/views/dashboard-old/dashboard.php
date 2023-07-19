<?php $this->load->view("dashboard-layout/_partials/header.php") ?>
    <?php $this->load->view("dashboard-layout/_partials/topnav.php") ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="col-3 align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-webcam"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10">
                                            <h5 class="mt-0 round-inner">$18090</h5>
                                            <p class="mb-0 text-muted">Visits Today</p>                                                                 
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="col-3 align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-account-multiple-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center align-self-center">
                                        <div class="m-l-10 ">
                                            <h5 class="mt-0 round-inner">562</h5>
                                            <p class="mb-0 text-muted">New Users</p>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                    </div>                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="col-3 align-self-center">
                                        <div class="round ">
                                            <i class="mdi mdi-basket"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10 ">
                                            <h5 class="mt-0 round-inner">7514</h5>
                                            <p class="mb-0 text-muted">New Orders</p>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="col-3 align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-rocket"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-center text-center">
                                        <div class="m-l-10">
                                            <h5 class="mt-0 round-inner">$32874</h5>
                                            <p class="mb-0 text-muted">Total Sales</p>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-8">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h5 class="header-title pb-3 mt-0">Overview</h5>
                                <div id="multi-line-chart" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <a href="" class="btn btn-primary btn-sm float-right">More Info</a>
                                <h5 class="header-title mt-0 pb-3">Revenue By Country</h5>
                                                                                
                                <ul class="list-unstyled list-inline text-center">
                                    <li class="list-inline-item">
                                        <p><i class="mdi mdi-checkbox-blank-circle text-primary mr-2"></i>Canada</p> 
                                    </li>
                                    <li class="list-inline-item">
                                        <p><i class="mdi mdi-checkbox-blank-circle text-info mr-2"></i>USA</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <p><i class="mdi mdi-checkbox-blank-circle text-greylight mr-2"></i>London</p>    
                                    </li>
                                </ul> 
                                <div id="morris-donut-chart" style="height:345px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card bg-info m-b-30">
                            <div class="card-body">
                                <div id="verticalCarousel" class="carousel slide vertical" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row d-flex justify-content-center text-center">
                                                <div class="col-sm-12 carousel-icon">
                                                    <i class="fa fa-twitter text-white pt-3"></i>
                                                </div>
                                                <div class="col-6 text-white">                                                                
                                                    <h2>54k</h2>
                                                    <p class="">Followers</p>                                                                
                                                </div>
                                                <div class="col-6 text-white">                                                                
                                                    <h2>44k</h2>
                                                    <p class="">Tweets</p>                                                               
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-sm-12 carousel-icon text-center">
                                                    <i class="fa fa-twitter text-white pt-3"></i>
                                                </div>
                                                <div class="col-sm-10 mx-auto text-white text-center">
                                                    <p>Lorem Ipsum is simply dummy text of the <span class="warning">#TWITTER</span> and typesetting industry. A description list is perfect for defining terms.</p>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card bg-primary ">
                            <div class="card-body">
                                <div id="verticalCarousel2" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-12 carousel-icon text-center">
                                                    <i class="fa fa-facebook text-white pt-3"></i>
                                                </div>
                                                <div class="col-sm-10 mx-auto text-white text-center">
                                                    <p>Lorem Ipsum is simply dummy text of the <mark> FACEBOOK </mark> and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row d-flex justify-content-center text-white text-center">
                                                <div class="col-sm-12 carousel-icon">
                                                    <i class="fa fa-facebook text-white pt-3"></i>
                                                </div>
                                                <div class="col-6">                                                                
                                                    <h2>54k</h2>
                                                    <p class="">Followers</p>                                                               
                                                </div>
                                                <div class="col-6">                                                                
                                                    <h2>44k</h2>
                                                    <p class="">Posts</p>                                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card bg-white m-b-30">
                            <div class="card-body new-user">
                                
                                <div class="row text-center">
                                    <div class="col-6">
                                        <h5><i class="mdi mdi-database mr-2 text-primary font-20"></i> 5 TB</h5>
                                        <h6 class="text-lightdark">Bandwidth usage</h6>
                                        <span class="text-muted"> <small>June 2018</small></span>
                                    </div>
                                    <div class="col-6">
                                        <h5><i class="mdi mdi-download mr-2 text-success font-20"></i>5412</h5>
                                        <h6 class="text-lightdark">Download count</h6>
                                        <span class="text-muted"> <small>June 2018</small></span>
                                    </div>
                                </div>
                                <div id="morris-area-chart" style="height: 310px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <div class="card bg-white m-b-30">
                            <img src="assets/images/widgets/wather.jpg" alt="" class="img-fluid">
                            
                            <div class="card-body bg-primary">                                
                                <div class="row">
                                    <div class="col-6  align-self-center">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 text-center">
                                                <canvas id="partly-cloudy-day" width="70" height="70"></canvas>
                                                <h6 class="text-white">SUNDAY <span>25<sup>th</sup></span></h6>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 text-center align-self-center">
                                                <h5 class="mt-0 text-white"><b>32°</b></h5>
                                                <p class="text-white  font-12">Partly cloudy</p>
                                                <p class="text-white font-12">15km/h - 37%</p>
                                            </div>
                                        </div><!-- End row -->
                                    </div>
                                    <div class="col-6 align-self-center">
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                <h6 class="text-white mt-0 font-14">MON</h6>
                                                <canvas id="rain" width="28" height="35"></canvas>
                                                <h6 class="text-white font-14">38°<i class="wi-degrees"></i></h6>
                                            </div>
                                            <div class="col-6 text-center">
                                                <h6 class="text-white mt-0 font-14">TUE</h6>
                                                <canvas id="wind" width="35" height="35"></canvas>
                                                <h6 class="text-white font-14">32°<i class="wi-degrees"></i></h6>
                                            </div>                                                                                                                                              
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end row -->                            
                            </div>
                        </div>
                    </div>                                                 
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-8 align-self-center">
                        <div class="card bg-white m-b-30">
                            <div class="card-body new-user">
                                <h5 class="header-title mb-4 mt-0">Members Profiles</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0" style="width:60px;">Member</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Country</th>
                                                <th class="border-top-0">Earnings</th>
                                                <th class="border-top-0">Sales</th>                                    
                                                <th class="border-top-0">Reviews</th>
                                                <th class="border-top-0">Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="user" width="40"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Ruby T. Curd</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/us_flag.jpg" alt="" style="width:30px">
                                                </td>
                                                <td>$100</td>
                                                <td>10</td>                                   
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                    <td>
                                                    <div class="progress" style="height:8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 94%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-3.jpg" alt="user" width="40"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">William A. Johnson</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/french_flag.jpg" alt="" style="width:30px">
                                                </td>
                                                <td>$490</td>
                                                <td>24</td>                                   
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                    <td>
                                                    <div class="progress" style="height:8px;">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-4.jpg" alt="user" width="40"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Bobby M. Gray</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/spain_flag.jpg" alt="" style="width:30px">
                                                </td>
                                                <td>$380</td>
                                                <td>19</td>                                   
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                    <td>
                                                    <div class="progress" style="height:8px;">
                                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-5.jpg" alt="user" width="40"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Robert N. Carlile</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/russia_flag.jpg" alt="" style="width:30px">
                                                </td>
                                                <td>$450</td>
                                                <td>30</td>                                   
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                    <td>
                                                    <div class="progress" style="height:8px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-6.jpg" alt="user" width="40"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Ruby T. Curd</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/italy_flag.jpg" alt="" style="width:30px">
                                                </td>
                                                <td>$500</td>
                                                <td>40</td>                                   
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                    <td>
                                                    <div class="progress" style="height:8px;">
                                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <div class="card bg-white m-b-30">
                            <div class="card-body new-user">
                                    <h5 class="header-title mt-0 mb-4">New Users</h5>
                                <ul class="list-unstyled mb-0 pr-3" id="boxscroll2" tabindex="1" style="overflow: hidden; outline: none;">
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0">Ruby T. Curd <i class="fa fa-circle text-success mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">Now</small>
                                                <small class="text-muted">Newyork</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0">William A. Johnson <i class="fa fa-circle text-success mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">Now</small>
                                                <small class="text-muted">California</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">                                                    
                                                <p class="media-heading mb-0">Robert N. Carlile<i class="fa fa-circle text-danger mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">10 min ago</small>
                                                <small class="text-muted">India</small>                                                   
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0">Bobby M. Gray <i class="fa fa-circle text-success mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">Now</small>
                                                <small class="text-muted">Australia</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0">Ruby T. Curd <i class="fa fa-circle text-danger mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">36 min ago</small>
                                                <small class="text-muted">New Zealand</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0">Robert N. Carlile <i class="fa fa-circle text-success mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">Now</small>
                                                <small class="text-muted">India</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-3">
                                        <div class="media">
                                            <div class="thumb float-left">
                                                <a href="#">
                                                    <img class=" rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0">Bobby M. Gray<i class="fa fa-circle text-danger mr-1 pull-right"></i></p>
                                                <small class="pull-right text-muted">58 min ago</small>
                                                <small class="text-muted">Australia</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>                                    
                            </div>                                
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </div>

        <?php $this->load->view("dashboard-layout/_partials/footer.php") ?>

        <?php $this->load->view("dashboard-layout/_partials/js.php") ?>
<?php $this->load->view("dashboard-layout/_partials/close.php") ?>