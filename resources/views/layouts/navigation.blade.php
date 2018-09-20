<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">

            <li> 
                <a href="<?= url('users') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> User <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Student <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/student_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a student</span></a> </li>
                            <li> <a href="<?= url('users/student_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a student</span></a> </li>
                            <li> <a href="<?= url('users/student_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a student</span></a> </li>
                            <li> <a href="<?= url('users/student_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a student</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Parents <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/parent_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a parent</span></a> </li>
                            <li> <a href="<?= url('users/parent_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a parent</span></a> </li>
                            <li> <a href="<?= url('users/parent_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a parent</span></a> </li>
                            <li> <a href="<?= url('users/parent_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a parent</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Teachers <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/teacher_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a teacher</span></a> </li>
                            <li> <a href="<?= url('users/teacher_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a teacher</span></a> </li>
                            <li> <a href="<?= url('users/teacher_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a teacher</span></a> </li>
                            <li> <a href="<?= url('users/teacher_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a teacher</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Staff <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/staff_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add staff</span></a> </li>
                            <li> <a href="<?= url('users/staff_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view staff</span></a> </li>
                            <li> <a href="<?= url('users/staff_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit staff</span></a> </li>
                            <li> <a href="<?= url('users/staff_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete staff</span></a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            
            <li> 
                <a href="<?= url('class') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Class <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('class/add_class') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Define Class</span></a> </li>
                    <li> <a href="<?= url('class/view_class') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Class</span></a> </li>
                    <li> <a href="<?= url('class/edit_class') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Edit Class</span></a> </li>
                    <li> <a href="<?= url('class/delete_class') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Delete Class</span></a> </li>
                </ul>
            </li>


            <li> 
                <a href="<?= url('exam') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Exam <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Exam <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('exam/exam_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define Exam</span></a> </li>
                            <li> <a href="<?= url('exam/exam_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Exam</span></a> </li>
                            <li> <a href="<?= url('exam/exam_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Exam</span></a> </li>
                            <li> <a href="<?= url('exam/exam_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Exam</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Exam Schedule <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('exam/exam_schedule_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define Exam Schedule</span></a> </li>
                            <li> <a href="<?= url('exam/exam_schedule_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Exam Schedule</span></a> </li>
                            <li> <a href="<?= url('exam/exam_schedule_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Exam Schedule</span></a> </li>
                            <li> <a href="<?= url('exam/exam_schedule_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Exam Schedule</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Exam Report <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('exam/exam_report_create') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to create exam report</span></a> </li>
                            <li> <a href="<?= url('exam/exam_report_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view exam report</span></a> </li>

                        </ul>
                    </li>
                    <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Parent view <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">                            
                            <li> <a href="<?= url('exam/parent_view_report') ?>"><i class=" fa-fw"></i><span class="hide-menu">How parent can view student report</span></a> </li>
                        </ul>
                    </li>
                     <li> <a href="<?= url('') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Teacher's comment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">                            
                            <li> <a href="<?= url('exam/add_comment') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add comment per each student</span></a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            
           
             <li> 
                <a href="<?= url('mark') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Mark <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('mark/add_mark') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Add Marks</span></a> </li>
                    <li> <a href="<?= url('mark/view_marks') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Marks</span></a> </li>                                      
                </ul>
            </li>
            
            
            <li> 
                <a href="<?= url('section') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Section<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('section/add_section') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Define Section</span></a> </li>
                    <li> <a href="<?= url('section/view_section') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Section</span></a> </li>
                    <li> <a href="<?= url('section/edit_section') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Edit Section</span></a> </li>
                    <li> <a href="<?= url('section/delete_section') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Delete Section</span></a> </li>
                </ul>
            </li>
            
            
             <li> 
                <a href="<?= url('class_level') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Class Level<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('class_level/add_class_level') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Define Class Level</span></a> </li>
                    <li> <a href="<?= url('class_level/view_class_level') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Class Level</span></a> </li>
                    <li> <a href="<?= url('class_level/edit_class_level') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Edit Class Level</span></a> </li>
                    <li> <a href="<?= url('class_level/delete_class_level') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Delete Class Level</span></a> </li>
                </ul>
            </li>

        </ul>
    </div>
</div>