@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <!-- .Row -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="white-box">
                <h3 class="box-title">HOW TO VIEW SCHEME OF WORK</h3>
                <div class="row">
                <p>The following are the steps to view scheme of work:</p>
                   
                <p>On the Sidebar, select "Subject"</p>
                        <div class="col-sm-8">
                            <img src="<?= url('public/images/subject/scheme/scheme_view1.png') ?>" width="120%" height="100%"/>
                        </div>
                    
                </div>
                <div class="row">
                    <p>Click on “Syllabus”</p>
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/subject/scheme/scheme_view2.png') ?>" width="120%" height="100%"/>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="white-box">
                <div class="row">
                    <p>Click on “Scheme of Work”</p>

                        <div class="col-sm-8">
                            <img src="<?= url('public/images/subject/scheme/scheme_view3.png') ?>" width="120%" height="100%"/>
                        </div>
                </div>
               
                <p>Select the classes and subjects to view respective scheme of work</p>
                <div class="row">
                    <div class="col-sm-8">
                        <img src="<?= url('public/images/subject/scheme/scheme_view4.png') ?>" width="120%" height="100%"/>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection