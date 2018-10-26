

## User Access


- create database in your local computer
- import db backup
- ensure db configuration in config/database.php match with your local configuration i.e username, password etc
- open constant schema and open a table named permissions
- use column name "name" to access permission

For example

 if(can_access('view_student')){


 }

