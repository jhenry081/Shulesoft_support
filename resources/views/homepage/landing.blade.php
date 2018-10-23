@extends('layouts.master')
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
         <div class="white-box">
            <h1 class="box-title" align="center">WELCOME TO SHULESOFT SUPPORT: GET STARTED!</h1>
                <div class="row"> 
                <p>In this user guide, you will understand how the system works and be able to get the full potential of the system</p>
                   
                      <div class="col-sm-8">
                      <img src="<?= url('public/images/landing/landing1.png') ?>" width="120%" height="100%"/>
                      </div>
                    
                </div>

                <div class="row"> 
                <p>
                <ul type="">
                <li>Dashboard – This is the page displayed above will be seen upon logging in to your account, it displays various overviews of the users, invoices, books and a graphical representation of student's performance</li>
                <p></p>
                <li>Sidebar – It enables you to switch in to different modules available in the system.</li>
                <p></p>
                <li>Navigation view – It enables to display navigation menu</li>
                <p></p>
                <li>Search – It enables quick finding of resources in the system</li>
                <p></p>
                <li>Notification – It notifies about important information concerning your account.</li>
                <p></p>
                <li>Choose Language – It enables you to select a language of your choice</li>
                <p></p>
                <li>SMS/MAIL – It enables you to check for all available messages (i.e inbox sms/mail, sent sms/mail) and to compose messages</li>
                <p></p>
                <li>Profile – It enables you to view your personal information available in the system, change your password, look for new updates, check for help and to logout the sysytem.</li>
                </ul>
                </p>
                   
                      
                    
                </div>

         </div>
      </div>
    </div>

</div>

@endsection