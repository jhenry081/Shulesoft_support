@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <!-- .Row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="white-box">
                <h3 class="box-title">HOW TO CHANGE OR UPDATE SYSTEM SETTINGS</h3>
                <div class="row">
                    <p>In ShuleSoft System you can change settings as you want for system to operate in the way that you desire, after Login the following steps are involved in system setting:</p>


                    <p>On Side bar click on Settings</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/1.png') ?>" width="130%" height="100%"/>
                    </div>

                </div>

                <div class="row">

                    <p>Then select System Settings</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/2.png') ?>" width="130%" height="100%"/>
                    </div>

                </div>  

                <div class="row">
                    <p>Note: Now you can deal with the System Settings as follows</p>
                    <h4>General Setting</h4>
                    <p>Select General as shown below, then fill all the fields to complete the general settings</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/3.png') ?>" width="130%" height="100%"/>
                    </div>

                    <div class="col-sm-8">
                        <p>Then Click on Update Setting to save the changes</p>
                        <img src="<?= url('public/images/setting/system_setting/4.png') ?>" width="130%" height="100%"/>
                    </div>
                </div>


                <div class="row">
                    <h4>Super User Setting</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/5.png') ?>" width="130%" height="100%"/>
                        <p>1) Select Super User as shown above, then</p>
                        <p>2) Fill all the fields by writing Name and Username of the super user</p>
                        <p>3) Click on Update Setting to save the changes</p>
                    </div>
                </div>

                <div class="row">
                    <h4>Currency Setting</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/6.png') ?>" width="130%" height="100%"/>
                        <p>1) Select Currency</p>
                        <p>2) Fill the fields for Currency setting</p>
                        <p>3) Click Update Setting to save changes</p>
                    </div>
                </div>

                <div class="row">
                    <h4>School Logo Setting</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/7.png') ?>" width="130%" height="100%"/>
                        <p>1) Select School logo, then</p>
                        <p>2) Click upload to choose Logo from the files</p>
                    </div>

                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/8.png') ?>" width="130%" height="100%"/>
                        <p>NB: After selecting your Logo then Click open</p>
                        <p>3) Then Click on Update Setting to save Changes</p>
                        <p>4) Logo will be displayed in that Field after successfully uploaded </p>

                    </div>
                </div>


                <div class="row">
                    <h4>SMS/Email Setting</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/9.png') ?>" width="130%" height="100%"/>
                        <p>1) Select SMS/Email Setting as shown above</p>
                        <p>2) Fill the fields by API KEY and API SECRET, if you don’t have it click on “Read Here how to get KEY & SECRET” then the instructions will be displayed as shown below</p>
                    </div>

                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/10.png') ?>" width="130%" height="100%"/>
                        <p>NB:Then fill the Check boxes to enable SMS and Email, and Select SMS Type</p>
                        <p>3) Click on Update Setting to save the changes</p>                     

                    </div>
                </div>

                <div class="row">
                    <h4>Academic Year Setting</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/11.png') ?>" width="130%" height="100%"/>
                        <p>1)Select Academic Year</p>
                        <p>2)Enter all the required information in the fields for Academic Year definition for a class level that you will select</p>
                        <p>3)Click Add to save the Academic Year </p>
                        <p>4)The Academic Year you have defined will be seen in this table, and also you can click on edit to update the changes as follows </p>

                    </div>

                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/12.png') ?>" width="130%" height="100%"/>
                        <p>(i)Fill all the fields, then</p>
                        <p>(ii)Click on Update </p>
                    </div>
                </div>

                <div class="row">
                    <h4>Exam Settings</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/13.png') ?>" width="130%" height="100%"/>
                        <p>1)Select Exam Settings</p>

                        <p>2)Average option setting</p>
                        <p>(i)Select this option if you want the system to calculate average by including only the exam subjects done by a student</p>
                        <p>(ii)Select this option if you want the system to calculate average by including all subjects (Core and Subscribed Subjects) even if the student did not do other exam subjects</p>

                        <p>3)Publish Exam Report Setting</p>
                        <p>(i)Select this option if you want the report to be published every time when Marks are entered</p>
                        <p>(ii)Select this Option if you want the report to be published after it have been validated</p>

                        <p>4)Show Report Option</p>
                        <p>(i)The first option is for all parents</p>
                        <p>(ii)The second option is for custom selection i.e. Finish school fee</p>

                        <p>5)Click on Submit Query to save the changes</p>
                    </div>
                </div>

                <div class="row">
                    <h4>Report Settings</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/14.png') ?>" width="130%" height="100%"/>
                        <p>1)Select Report settings</p>
                        <p>2)Enter the symbol/character that will replace the empty field when marks are not filled</p>
                        <p>3)Click Add to save that symbol/character to the system</p>
                        <p>4)The sample symbol/character that is defined will be seen in this field</p>

                    </div>
                </div>

                <div class="row">
                    <h4>Account Settings</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/15.png') ?>" width="130%" height="100%"/>
                        <p>1)Select Account Setting</p>
                        <p>2)Select Class Level and Academic Year to transfer the Account settings</p>
                        <p>3)Click on Transfer Setting to complete the transfer setting</p>
                    </div>
                </div>

                <div class="row">
                    <h4>Account Settings</h4>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/setting/system_setting/16.png') ?>" width="130%" height="100%"/>
                        <p>1)Select Payment Integration Settings</p>
                        <p>2)Charges Option setting</p>
                        <p>(i)The first Option means parent will be charged during payment</p>
                        <p>(ii)The second Option means School will be charged during payment</p>
                    </div>
                </div>





            </div>
        </div>
    </div>   


</div>

@endsection