@extends('layouts.master')
@section('content')
<div class="container-fluid">

                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Starter Page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Starter Page</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Only Content Scroll</h3>
                            <div class="row">
                                <div class="col-sm-3"><img src="../plugins/images/big/img1.jpg" class="img-responsive"></div>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="col-sm-9" id="slimtest1" style="overflow: hidden; width: auto; height: 250px;">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                    <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                    <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                    <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                    <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 81px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 129.4px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.Row -->
                <!-- .Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Both Scroll</h3>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div id="slimtest2" style="overflow: hidden; width: auto; height: 250px;">
                                <div class="row">
                                    <div class="col-sm-3"><img src="../plugins/images/big/img2.jpg" class="img-responsive"></div>
                                    <div class="col-sm-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                        <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                        <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                        <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                        <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                    </div>
                                </div>
                            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 129.4px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                    </div>
                </div>
                <!-- /.Row -->
                <!-- .Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Scroll on Left</h3>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div id="slimtest3" style="overflow: hidden; width: auto; height: 250px;">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="p-20">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                            <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                            <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                            <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                            <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3"><img src="../plugins/images/big/img3.jpg" class="img-responsive"></div>
                                </div>
                            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 96px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; left: 1px; height: 119.503px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: block; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; left: 1px;"></div></div>
                        </div>
                    </div>
                </div>
                <!-- /.Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Custome Scroll Color</h3>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div id="slimtest4" style="overflow: hidden; width: auto; height: 250px;">
                                <div class="row">
                                    <div class="col-sm-3"><img src="../plugins/images/big/img4.jpg" class="img-responsive"></div>
                                    <div class="col-sm-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                        <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus, felis interdum condimentum consectetur, nisl libero elementum eros, vehicula congue lacus eros non diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                        <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                        <p>Vivamus mauris lorem, lacinia id tempus non, imperdiet et leo. Cras sit amet erat sit amet lacus egestas placerat. </p>
                                        <p>Aenean ultricies ultrices mauris ac congue. In vel tortor vel velit tristique tempus ac id nisi. Proin quis lorem velit. Nunc dui dui, blandit a ullamcorper vitae, congue fringilla lectus. Aliquam ultricies malesuada feugiat. Vestibulum placerat turpis et eros lobortis vel semper sapien pulvinar.</p>
                                    </div>
                                </div>
                            </div><div class="slimScrollBar" style="background: rgb(0, 0, 255) none repeat scroll 0% 0%; width: 10px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 129.4px;"></div><div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                    </div>
                </div>
                <!-- .Row -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme working">12</a></li>
                            </ul>
                            <ul class="m-t-20 all-demos">
                                <li><b>Choose other demos</b></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div><div class="slimScrollBar" style="background: rgb(220, 220, 220) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

         
 @endsection