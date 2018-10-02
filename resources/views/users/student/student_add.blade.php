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

                <div class="row">
                    <p>For mobile phones:Click on "Users" then "Students"</p>

                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_aved3.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <p><b>STEP 2:</b> Click on “Student”</p>
                <div class="row">
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_aved4.png') ?>" width="80%" height="80%"/>
                    </div>
                </div>
           
                <div class="row">
                        <p><b>STEP 3:</b> Click on “Add student(s)”</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add5.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>
                <div class="row">
                    <p>For mobile phones</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add6.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>
           
                <div class="row">
                       <p><b>STEP 4:</b> You are now in the registration section, you can register a student(s) in two ways:
                        <p>By manually entering the student's information</p>
                    </p>
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
                       <p><b>STEP 4.1:</b> Fill in the student's parent information and fill in previous academic reports of the student (if available and/or required by the school)</p>
                       
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
                
               <p><b>STEP 4.2:</b> Click on "Submit" to complete the registration</p>
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
                   <li><p>Excel Registration, this method is used to register many students at once</p></li>
                   <p>Tip: This method is most effective when the students' excel has data already</p> 
                   <p>Click on “Excel Registration”</p>
                   <div class="col-sm-8">
                       <img src="<?= url('public/images/users/student/student_add13.png') ?>" width="80%" height="80%"/>
                    </div>
                </ol>
                </div>

                <div class="row">
                    <p>Now you can download Excel Registration sample file, and use it (by editing) for entering the student information required for registration and save it in your documents. But if you have existing Excel Registration file in your system you can skip this step and jump to “browse stage”</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add14.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>

                <div class="row">
                    
                       <p>“Excel Registration Sample” Downloaded from ShuleSoft system</p> 
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add15.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>
                <div class="row">
                    <p>Browse your existing file now by click on “Browse” and upload it to ShuleSoft system, after editing and save it in your document files</p>
                    <p>Click Brows</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add16.png') ?>" width="80%" height="80%"/>
                    </div>

                </div>

                <div class="row">

                        <p>Choose your Excel file and Click “Open”</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/users/student/student_add17.png') ?>" width="80%" height="80%"/>
                        </div>
                </div>

                <div class="row">
                    <p>After successful upload of excel file, then Click on “Submit”</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/users/student/student_add18.png') ?>" width="80%" height="80%"/>
                        <p>Note: If the all procedure is done well and all text fields is full of required information, the success notification will appear on top at the right corner, otherwise repeat all the procedures carefully.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection