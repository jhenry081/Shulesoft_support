
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
                    <li> <a href="<?= url('users/student') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Student <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/student/student_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a student</span></a> </li>
                            <li> <a href="<?= url('users/student/student_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a student</span></a> </li>
                            <li> <a href="<?= url('users/student/student_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a student</span></a> </li>
                            <li> <a href="<?= url('users/student/student_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a student</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('users/parent') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Parents <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/parent/parent_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a parent</span></a> </li>
                            <li> <a href="<?= url('users/parent/parent_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a parent</span></a> </li>
                            <li> <a href="<?= url('users/parent/parent_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a parent</span></a> </li>
                            <li> <a href="<?= url('users/parent/parent_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a parent</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('users/teacher') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Teachers <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/teacher/teacher_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a teacher</span></a> </li>
                            <li> <a href="<?= url('users/teacher/teacher_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a teacher</span></a> </li>
                            <li> <a href="<?= url('users/teacher/teacher_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a teacher</span></a> </li>
                            <li> <a href="<?= url('users/teacher/teacher_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a teacher</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('users/staff') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Staff <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('users/staff/staff_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add staff</span></a> </li>
                            <li> <a href="<?= url('users/staff/staff_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view staff</span></a> </li>
                            <li> <a href="<?= url('users/staff/staff_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit staff</span></a> </li>
                            <li> <a href="<?= url('users/staff/staff_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete staff</span></a> </li>
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
                    <li> <a href="<?= url('exam') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Exam <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('exam/exam_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define Exam</span></a> </li>
                            <li> <a href="<?= url('exam/exam_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Exam</span></a> </li>
                            <li> <a href="<?= url('exam/exam_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Exam</span></a> </li>
                            <li> <a href="<?= url('exam/exam_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Exam</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('exam schedule ') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Exam Schedule <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('exam/exam_schedule_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define Exam Schedule</span></a> </li>
                            <li> <a href="<?= url('exam/exam_schedule_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Exam Schedule</span></a> </li>
                            <li> <a href="<?= url('exam/exam_schedule_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Exam Schedule</span></a> </li>
                            <li> <a href="<?= url('exam/exam_schedule_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Exam Schedule</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('exam report') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Exam Report <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('exam/exam_report_create') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to create exam report</span></a> </li>
                            <li> <a href="<?= url('exam/exam_report_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view exam report</span></a> </li>

                        </ul>
                    </li>
                    <li> <a href="<?= url('parent view') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Parent view <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">                            
                            <li> <a href="<?= url('exam/parent_view_report') ?>"><i class=" fa-fw"></i><span class="hide-menu">How parent can view student report</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('teacher\'s comment') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Teacher's comment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">                            
                            <li> <a href="<?= url('exam/add_comment') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add comment per each student</span></a> </li>
                        </ul>
                    </li>
                </ul>


            </li>



            <li> 
                <a href="<?= url('marks') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Mark <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('mark/add_marks') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Add Marks</span></a> </li>
                    <li> <a href="<?= url('mark/view_marks') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Marks</span></a> </li>                                      
                </ul>
            </li>


            <li> 
                <a href="<?= url('section') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Section<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('section/section_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Add Section</span></a> </li>
                    <li> <a href="<?= url('section/section_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Section</span></a> </li>
                    <li> <a href="<?= url('section/section_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Edit Section</span></a> </li>
                    <li> <a href="<?= url('section/section_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Delete Section</span></a> </li>
                </ul>
            </li>


            <li> 
                <a href="<?= url('class level') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Class Level<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('class_level/class_level_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Add Class Level</span></a> </li>
                    <li> <a href="<?= url('class_level/class_level_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Class Level</span></a> </li>
                    <li> <a href="<?= url('class_level/class_level_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Edit Class Level</span></a> </li>
                    <li> <a href="<?= url('class_level/class_level_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To Delete Class Level</span></a> </li>
                </ul>
            </li>


            <li> 
                <a href="<?= url('grades') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Grades<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('grades/add_grade') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Define Grade</span></a> </li>
                    <li> <a href="<?= url('grades/view_grade') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to View Grade</span></a> </li>
                    <li> <a href="<?= url('grades/specify_grade') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To create special grading format</span></a> </li>                  
                </ul>
            </li>

            <li> 
                <a href="<?= url('hostel') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Hostel <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('hostel') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Hostel <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('hostel/add_hostel') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Hostel</span></a> </li>
                            <li> <a href="<?= url('hostel/view_hostel') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Hostel</span></a> </li>
                            <li> <a href="<?= url('hostel/edit_hostel') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Hostel</span></a> </li>
                            <li> <a href="<?= url('hostel/delete_hostel') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Hostel</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('member') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Member <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('hostel/add_member') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a member</span></a> </li>
                            <li> <a href="<?= url('hostel/view_member') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a member</span></a> </li>                            
                            <li> <a href="<?= url('hostel/delete_member') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a member</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('hostel category') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Hostel Category <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('hostel/add_hostel_category') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Hostel category</span></a> </li>
                            <li> <a href="<?= url('hostel/view_hostel_category') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Hostel category</span></a> </li>
                            <li> <a href="<?= url('hostel/delete_hostel_category') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Hostel category</span></a> </li>
                        </ul>
                    </li>                  
                </ul>
            </li>


            <li> 
                <a href="<?= url('transport') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Transport <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('vehicle') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Vehicle <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('transport/add_vehicle') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Vehicle</span></a> </li>
                            <li> <a href="<?= url('transport/view_vehicle') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Vehicle</span></a> </li>
                            <li> <a href="<?= url('transport/delete_vehicle') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Vehicle</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('member') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Member <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('transport/add_member') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to assign member</span></a> </li>
                            <li> <a href="<?= url('transport/view_member') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a member</span></a> </li>                            
                            <li> <a href="<?= url('transport/delete_member') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a member</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('transport route') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Transport Route <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('transport/add_transport_route') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define Transport Route</span></a> </li>
                            <li> <a href="<?= url('transport/view_transport_route') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Transport Route</span></a> </li>
                            <li> <a href="<?= url('transport/delete_transport_route') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Transport Route</span></a> </li>
                        </ul>
                    </li>                  
                </ul>
            </li> 
            
            
              <li> 
                <a href="<?= url('signature') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Signature <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('signature/add_signature') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define signature</span></a> </li>                 
                </ul>
              </li>
              
              
              <li> 
                <a href="<?= url('other_reports') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Other Reports<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('other_reports/view_inactive_user') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Inactive Users</span></a> </li>
                    <li> <a href="<?= url('other_reports/view_graduates') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To View Graduates</span></a> </li>
                    <li> <a href="<?= url('other_reports/view_student_reports') ?>"><i class=" fa-fw"></i><span class="hide-menu">How To view student report based on status</span></a> </li>                   
                </ul>
             </li>
             
             
            
             <li> 
                <a href="<?= url('character') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Character <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('characters') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Characters <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('character/add_character') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add character</span></a> </li>                          
                            <li> <a href="<?= url('character/edit_character') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit character</span></a> </li>
                            <li> <a href="<?= url('character/delete_character') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete character</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('character category') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Character Categories <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('character/add_character_category') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add character category</span></a> </li>                           
                            <li> <a href="<?= url('character/edit_character_category') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit character category</span></a> </li>
                            <li> <a href="<?= url('character/delete_character_category') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete character category</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('character grades') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Character Grades <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('character/add_character_grades') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Character Grades</span></a> </li>                           
                        </ul>
                    </li>
                    <li> <a href="<?= url('general assessment') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">General Assessment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('character/add_general_assesment') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Add General Assesment</span></a> </li>
                            <li> <a href="<?= url('character/view_general_assesment') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view General Assesment</span></a> </li>                            
                        </ul>
                    </li>
                    <li> <a href="<?= url('character report') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Character Report <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li> <a href="<?= url('character/view_character_report') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Student Character Report</span></a> </li>                            
                        </ul>
                    </li>
                </ul>
            </li>   
            
            
            <li> 
                <a href="<?= url('library') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Library <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('books') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Books <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('library/add_book') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Book</span></a> </li>                          
                            <li> <a href="<?= url('library/edit_book') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Book</span></a> </li>
                            <li> <a href="<?= url('library/delete_book') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Book</span></a> </li>
                            <li> <a href="<?= url('library/issue_book') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Issue Book</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('update quantity') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Update Quantity <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('library/update_books') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to update Quantity of Books</span></a> </li>                          
                        </ul>
                    </li>
                    <li> <a href="<?= url('library report') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Library Report <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('library/view_general_report') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view general Library Report</span></a> </li>
                            <li> <a href="<?= url('library/view_other_report') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view other Library Report</span></a> </li>                          
                        </ul>
                    </li>                  
                </ul>
            </li>

           <li> 
                <a href="<?= url('subject') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Subject <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('subject') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Subjects <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('subject/subject/subject_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add a Subject</span></a> </li>
                            <li> <a href="<?= url('subject/subject/subject_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view a Subject</span></a> </li>
                            <li> <a href="<?= url('subject/subject/subject_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit a Subject</span></a> </li>
                            <li> <a href="<?= url('subject/subject/subject_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete a Subject</span></a> </li>
                            <li> <a href="<?= url('subject/subject/allocate_subject') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Allocate Subject in specific class</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('scheme') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Scheme of Work <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('subject/scheme/scheme_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to create scheme of work</span></a> </li>
                            <li> <a href="<?= url('subject/scheme/scheme_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view scheme of work</span></a> </li>           
                        </ul>
                    </li>
                    <li> <a href="<?= url('subject_teacher') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Subject Teacher <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('subject/subject_teacher/allocate_subject_teacher') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to allocate subject teacher in respective subject</span></a> </li>
                            <li> <a href="<?= url('subject/subject_teacher/subject_teacher_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view subject teacher</span></a> </li>                            
                        </ul>
                    </li>
                    <li> <a href="<?= url('benchmark') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Benchmark <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('subject/benchmark/benchmark_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add benchmark</span></a> </li>
                            <!-- <li> <a href="<?= url('subject/benchmark/benchmark_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view benchmark</span></a> </li> -->
                            <!-- <li> <a href="<?= url('subject/benchmark/benchmark_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit benchmark</span></a> </li> -->
                            <!-- <li> <a href="<?= url('subject/benchmark/benchmark_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete benchmark</span></a> </li> -->
                        </ul>
                    </li>
                </ul>
            </li> 
           
            
            <li> 
                <a href="<?= url('email/sms') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Email/Sms <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('template') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Template <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('email_sms/add_template') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Template</span></a> </li>
                            <li> <a href="<?= url('email_sms/view_template') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Template</span></a> </li>
                            <li> <a href="<?= url('email_sms/edit_template') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Template</span></a> </li>
                            <li> <a href="<?= url('email_sms/delete_template') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Template</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?= url('mail/text') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Mail/Text <span class="fa arrow"></span></span></a> 
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('email_sms/compose_mail') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to compose mail</span></a> </li>
                            <li> <a href="<?= url('email_sms/view_sent_items') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view sent items</span></a> </li>
                            <li> <a href="<?= url('email_sms/view_inbox') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view inbox texts</span></a> </li>                         
                        </ul>
                    </li>
                </ul>
            </li>
            
            
            <li> 
                <a href="<?= url('notice') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Notice <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('notice/calendar') ?>">
                            <i class=" fa-fw"></i><span class="hide-menu">Notice/Calendar <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= url('notice/add_notice') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Notice</span></a> </li>
                            <li> <a href="<?= url('notice/view_notice') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Notice</span></a> </li>
                            <li> <a href="<?= url('notice/edit_notice') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Notice</span></a> </li>
                            <li> <a href="<?= url('notice/delete_notice') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Notice</span></a> </li>
                            <li> <a href="<?= url('notice/upload_calendar') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Upload School Calendar</span></a> </li>
                        </ul>
                    </li>                   
                </ul>
            </li>
            
            
            <li> 
                <a href="<?= url('promotion') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Promotion <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('promotion/promote') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to Promote Student(s)</span></a> </li>                 
                </ul>
            </li>
            
            
            <li> 
                <a href="<?= url('routine') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Routine <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('routine/add_routine') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to define Routine</span></a> </li> 
                    <li> <a href="<?= url('routine/view_routine') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Routine</span></a> </li>
                </ul>
            </li>
            
            
            <li> 
                <a href="<?= url('terms') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Terms <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('terms/term_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Term</span></a> </li> 
                    <li> <a href="<?= url('terms/term_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Term</span></a> </li>
                    <li> <a href="<?= url('terms/term_edit') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to edit Term</span></a> </li>
                    <li> <a href="<?= url('terms/term_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete Term</span></a> </li>
                </ul>
            </li>
            
            
             <li> 
                <a href="<?= url('salaries') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Salaries <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('salaries/payroll_add') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to add Payroll</span></a> </li> 
                    <li> <a href="<?= url('salaries/payroll_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view Payroll</span></a> </li>
                </ul>
             </li>
             
             
             
            <li> 
                <a href="<?= url('messages') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Messages <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('messages/msg_compose') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to compose message</span></a> </li> 
                    <li> <a href="<?= url('messages/msg_delete') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to delete message</span></a> </li>
                    <li> <a href="<?= url('messages/favorite_msg_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view favorite message</span></a> </li> 
                    <li> <a href="<?= url('messages/inbox_msg_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view inbox</span></a> </li>
                    <li> <a href="<?= url('messages/sent_msg_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view sent message</span></a> </li> 
                    <li> <a href="<?= url('messages/trash_msg_view') ?>"><i class=" fa-fw"></i><span class="hide-menu">How to view trash message</span></a> </li>
                </ul>
            </li>
            
            <li> 
                <a href="<?= url('setting') ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Setting <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?= url('setting') ?>"><i class=" fa-fw"></i><span class="hide-menu">1</span></a> </li> 
                    <li> <a href="<?= url('setting') ?>"><i class=" fa-fw"></i><span class="hide-menu">2</span></a> </li>
                </ul>
            </li>
            
       </ul>
    </div>
</div>
