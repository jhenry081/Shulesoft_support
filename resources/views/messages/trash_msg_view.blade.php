@extends('layouts.master')
@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
         <div class="white-box">
            <h3 class="box-title">HOW TO VIEW TRASH MESSAGES</h3>
                <div class="row"> 
                <p>The following are the steps to view a trash message(s):</p>
                <p>On the Sidebar, select "Messages"</p>
                   
                      <div class="col-sm-8">
                      <img src="<?= url('public/images/message/trash_msg_view1.png') ?>" width="80%" height="80%"/>
                      </div>
                    
                </div>

                <div class="row">
                <p>For mobile phones: Press on menu</p>
                     <div class="col-sm-8">
                     <img src="<?= url('public/images/message/trash_msg_view2.png') ?>" width="80%" height="80%"/>
                     </div>
                </div>

                <div class="row">
                <p>Click on "Messages"</p>
                     <div class="col-sm-8">
                     <img src="<?= url('public/images/message/trash_msg_view3.png') ?>" width="80%" height="80%"/>
                     </div>
                </div>

                <div class="row"> 
                <p>Click on “Trash”</p>
                     <div class="col-sm-8">
                     <img src="<?= url('public/images/message/trash_msg_view4.png') ?>" width="80%" height="80%"/>
                     </div>
                </div>

                <div class="row"> 
                  <p>For mobile phones:</p>
                     <div class="col-sm-8">
                     <img src="<?= url('public/images/message/trash_msg_view5.png') ?>" width="80%" height="80%"/>
                     </div>
                </div>
         </div>
      </div>
    </div>

</div>
@endsection