@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <!-- .Row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="white-box">
                <h3 class="box-title">HOW TO ADD A STUDENT</h3>
                <div class="row">
                    <!-- the text below can be displayed as a read-only tip -->
                <p><b>Important Note: Before creating a new student, you should have already created/defined the parents, classes, sections and class levels.</b></p>
                </div>
                <div class="row">
                    <p>The following are the steps to create/add a student(s):</p>
                        <p><b>STEP 1:</b> On the Sidebar, select "Users"</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/all1.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                    <p>For mobile phones: Press on menu</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/all2.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>

                <p><b>STEP 2:</b> Click on “Student”</p>
                <div class="row">
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_aved4.png') ?>" width="80%" height="80%"/>
                    </div>
                </div>
                
                <div class="row">
                    <p>For mobile phones: Click on "Users" then "Students"</p>
                
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_aved3.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                        <p><b>STEP 3:</b> Click on “Add student(s)”</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add5.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                    <p>For mobile phones: Click on “Add student(s)”</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add6.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>
           
                <div class="row">
                       <p><b>STEP 4:</b> You are now in the registration section, you can register a student(s) in two ways: </p>
                        <p>i. By manually entering the student's information</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add7.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>
                <div class="row">
                    <p>For mobile phones</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add8.png') ?>" width="80%" height="80%"/>
                    </div>
                </div>

                <div class="row">
                       <p>Fill in the student's parent information and fill in previous academic reports of the student (if available and/or required by the school)</p>
                       
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add9.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                    <p>For mobile phones</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add10.png') ?>" width="80%" height="80%"/>
                    </div>
                </div>

                <div class="row">
                
               <p>Click on "Submit" to complete the registration</p>
                <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add11.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                    <p>For mobile phones</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add12.png') ?>" width="80%" height="80%"/>
                    </div>
                </div>

                <div class="row">
                   <p>ii. Excel Registration, this method is used to register many students at once</p>
                   <p>Tip: This method is most effective when the students' excel has data already</p> 
                   <p>Click on “Excel Registration”</p>
                   <div class="col-sm-8">
                       <img src="<?= url('public/images/users/student/student_add13.png') ?>" width="80%" height="80%"/>
                    </div>
                </ol>
                </div>

                <div class="row">
                    <p>You can download the Excel registration sample file and use it to enter the student information required and save it in your documents.</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add14.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>

                <div class="row">
                    
                       <p>“Excel Registration Sample” downloaded from ShuleSoft system</p> 
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add15.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>
                <div class="row">
                <p>If you already have an existing Excel registration file in your system, Click on “browse”</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add16.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>

                <div class="row">

                        <p>Choose your Excel file and click “Open”</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add17.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                    <p>After successfully uploading the excel file, click on “Submit”</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add18.png') ?>" width="80%" height="80%"/>
                        <p>Note: A success notification will appear at the top-right corner, otherwise repeat all the procedures carefully.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection