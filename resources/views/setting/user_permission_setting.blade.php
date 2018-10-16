@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <!-- .Row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="white-box">
                <h3 class="box-title">USER PERMISSION SETTINGS</h3>
                <div class="row">
                    <p>In ShuleSoft System you can give permissions to different users after Login to the System and perform the following steps:</p>


                    <p>On Side Bar select settings</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/1.png') ?>" width="130%" height="100%"/>
                    </div>

                </div>

                <div class="row">

                    <p>Then Select User Permission</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/2.png') ?>" width="130%" height="100%"/>
                    </div>

                </div>  

                <div class="row">
                    <p>Now you can Add user role and give permission (Specify Role) as follows</p>
                </div>  

                <div class="row">
                    <h4>Add new Role</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/3.png') ?>" width="130%" height="100%"/>
                        <p>1)Click on Add new role and write the role name</p>
                        <p>2)Then Click on Add to save to the system</p>                        
                    </div>
                </div>

                <div class="row">
                    <h4>Edit Role Name</h4>
                    <p>Click on Edit</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/4.png') ?>" width="130%" height="100%"/>
                    </div>

                    <div class="col-sm-8">
                        <p>Enter new role name and click Ok</p>
                        <img src="<?= url('public/images/setting/user_permission_setting/5.png') ?>" width="130%" height="100%"/>
                    </div>
                </div>


                <div class="row">
                    <h4>Delete Role</h4>
                     <p>Click on delete</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/6.png') ?>" width="130%" height="100%"/>                      
                    </div>
                </div>

                <div class="row">
                    <h4>Specify Role</h4>
                    <p>Select Role first</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/7.png') ?>" width="130%" height="100%"/>
                      
                    </div>
                </div>

                <div class="row">
                    <p>Then select module as shown below i.e. Student and click on check boxes to give permission for the user role you select, and you can ignore permission by removing a mark from the check boxes</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/user_permission_setting/8.png') ?>" width="130%" height="100%"/>
                    </div>

                    



            </div>
        </div>
    </div>   


</div>

@endsection