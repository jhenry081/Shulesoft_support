<?php

function clean_htmlentities($id) {
    return htmlentities($id, ENT_QUOTES, "UTF-8");
}

function createRoute() {
    $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $url_param = explode('/', $url);

    $controller = isset($url_param[2]) && !empty($url_param[2]) ? $url_param[2] : 'book';
    $method = isset($url_param[3]) && !empty($url_param[3]) ? $url_param[3] : 'index';
    $view = $method == 'view' ? 'show' : $method;

    return in_array($controller, array('public', 'storage')) ? NULL : $controller . '@' . $view;
}

function ftneGPA() {
    $status = ' 3.6 – 5.0';
}

function userAccessRole() {
    $username = request('username');
    $user_id = request('user_id');
    if ((int) $user_id > 0) {
        $user = DB::table(set_schema_name() . 'user')->where(array("userID" => $user_id, "username" => $username))->first();
        if (count($user) == 1) {
            if (strtolower($user->usertype) == 'admin') {
                $sql = 'SELECT name FROM  constant.permission';
            } else {

                $usertype = strtolower($user->usertype);

                if (in_array($usertype, array('student', 'teacher', 'parent'))) {
                    $where = 'role_id=(select id FROM ' . set_schema_name() . 'role where lower(name)=\'' . strtolower($usertype) . '\'  )  OR role_id IN (SELECT role_id from ' . set_schema_name() . 'user_role WHERE user_id=' . $user->id . ' and "table"=\'' . $user->table . '\' )';
                } else {
                    $where = 'role_id=' . $user->role_id . ' OR role_id IN (SELECT role_id from ' . set_schema_name() . 'user_role WHERE user_id=' . $user->id . ' and "table"=\'' . $user->table . '\' )';
                }
                $sql = 'SELECT * from constant.permission a where a.id IN (select permission_id FROM ' . set_schema_name() . 'role_permission WHERE ' . $where . ' )';
            }

            $permission = DB::select($sql);
            $objet = array();

            if (!empty($permission)) {
                foreach ($permission as $value) {
                    array_push($objet, $value->name);
                }
            }
            return $objet;
        }
    }
}

function can_access($permission) {
    $global = userAccessRole();
    return count($global) > 0 ? in_array($permission, $global) ? 1 : 0 : 1;
}

/**
 * @uses: This function will be used to detect aa schema name
 *         which is the username of that school
 * @return string
 */
function set_schema_name() {
//    $server_name = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
//    $domain = strtolower(str_replace('.shulesoft.com', '', $server_name));
    $domain = strlen(request('domain')) > 1 ? request('domain') : 'localhost';
    if ($domain == 'localhost') {
        // if condition for local IP will be here. If not localhost, put your server name
        $schema = 'testing.';
    } else if ($domain == 'demo') {
        $schema = 'public.';
    } else {
        $schema = $domain . '.';
    }
    return $schema;
}
