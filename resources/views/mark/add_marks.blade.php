@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <!-- .Row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="white-box">
                <h3 class="box-title">HOW TO ADD MARKS</h3>
                <div class="row">
                <!-- the text below can be displayed as a read-only tip -->
                <p class= "alert alert-info"><b>Important Note: Before adding marks, you should have already defined class, subjects and students</b></p>
                <p>The following are the steps to define marks:</p>

                        <p>On the Sidebar, select "Mark"</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/mark/add/1.png') ?>" width="120%" height="100%"/>
                        </div>
                    
                </div>
                <div class="row">
                    <p>For mobile phones: Press on menu</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/mark/add/2.png') ?>" width="60%" height="80%"/>
                    </div>
                </div>
                
                <div class="row">
                    <p>Click on "Mark"</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/mark/add/3.png') ?>" width="60%" height="80%"/>
                    </div>
                </div>
                
                <div class="row">
                   
                        <p>You can Enter Marks in two ways:</p>
                        <p> a) To enter marks directly to the system, following steps are involved</p>
                        <p> Click on "Add Marks"</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/mark/add/4.png') ?>" width="120%" height="100%"/>
                        </div>
                    
                </div>  
                
                  <div class="row">
                    <p>For mobile phones:</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/mark/add/5.png') ?>" width="40%" height="60%"/>
                    </div>
                  </div>
                
                 <div class="row">
                    <p>Select all requirements, such as class that you want to enter marks in the fields /p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/6.png') ?>" width="120%" height="100%"/>
                    </div>
                  </div>
                
                 <div class="row">
                    <p>For mobile phones:</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/mark/add/7.png') ?>" width="40%" height="60%"/>
                    </div>
                  </div>
                
                 <div class="row">
                    <p>Click on "Mark"</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/8.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                 <div class="row">
                    <p>For mobile phones:</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/mark/add/9.png') ?>" width="40%" height="60%"/>
                    </div>
                 </div>
                
                 <div class="row">
                    <p>Click on the fields and write the marks of the students</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/10.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                <div class="row">
                    <p>For mobile phones:</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/mark/add/11.png') ?>" width="40%" height="60%"/>
                    </div>
                 </div>
                
                 <div class="row">
                    <p>b) By Uploading Excel File to the System:</p>
                    <p>Click on Upload Mark (Excel) </p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/12.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                 <div class="row">
                    <p>Click on download icon (As shown Below) to download the sample file</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/13.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                 <div class="row">
                    <p>The Excel sample will be seen as follows, and use that Format to prepare your Marks and save it in your documents. </p>
                    <p class= "alert alert-info"><b>NB: While preparing excel sheet enter correct "Roll Number" for each student that exists in the system</b></p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/14.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                 <div class="row">
                    <p>After Saving your Excel File, Select Class, Academic Year, Semester and Exam, then click on "Browse" to select Excel file to the System</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/15.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                <div class="row">
                    <p>Choose Your File and Click "Open"</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/16.png') ?>" width="120%" height="100%"/>
                    </div>
                 </div>
                
                <div class="row">
                    <p>Click on "Upload" to complete the process</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/17.png') ?>" width="120%" height="100%"/>
                    </div>
                </div>
                
                <div class="row">
                    <p class= "alert alert-info">NOTE: A success notification must appear when any process of adding marks is completed</p>
                    <h4></h4>
                    <p>NB: Click on "Next" to view the next list</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/18.png') ?>" width="50%" height="25%"/>
                    </div>
                </div>
                
                 <div class="row">
                    <p>Click on "Previous" to view the previous list</p>
                    <div class="col-sm-8">
                      <img src="<?= url('public/images/mark/add/19.png') ?>" width="50%" height="25%"/>
                    </div>
                </div>
                   
                
                
            </div>
        </div>
    </div>   
    

</div>

@endsection
