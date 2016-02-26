<?php

/**
 * Get use login object
 * @return [array] user
 */
function auth_user() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : NULL;
}

/**
 * Print with html format tag <pre>
 * @param  [object]  $data
 * @param  [boolean] $die
 * @return [string] html tag
 */
function pp($data, $die = FALSE) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if ($die) {
        die();
    }
}

/**
 * Send redirect to specific path
 * @param  [string] $path
 * @param  [boolean] $isAction
 */
function redirect($path = '', $isAction = TRUE) {
    if ($isAction) {
        header('location: ' . URL);
    } else {
        header('location: ' . $path);
    }
    die();
}

/**
 * Conver object to json and send to respone
 * @param  [object] $data
 * @return [string] json
 */
function respone_json($data) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    die();
}

function request_has($name) {
    return isset($_REQUEST[$name]) ? TRUE : FALSE;
}

function request_not($name) {
    return isset($_REQUEST[$name]) ? FALSE : TRUE;
}

function request_input($name) {
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : NULL;
}

function request_post($name) {
    return isset($_POST[$name]) ? $_POST[$name] : NULL;
}

function request_get($name) {
    return isset($_GET[$name]) ? $_GET[$name] : NULL;
}

/**
 * Use to generate <a href="#"></a>
 * @param  string $title title of the a
 * @param  string $link  link in href="link"
 * @param  string $other other html attribute
 */
function a_link($title = '', $link = '', $other = '') {
    echo "<a $other href='" . URL . "$link'>$title</a>";
}

/*
<li>
<a class="<?php echo $url == '' ? 'active' : ''; ?>" href="<?php echo URL; ?>">
<?php echo $lang->MENU_HOME; ?>
</a>
</li>
 */

/**
 * Generate a link with class active when
 * link = current url
 * @param  [type] $title [description]
 * @param  [type] $link  [description]
 * @return [type]        [description]
 */
function a_link_menu($title, $link) {
    $url = str_replace('url=', '', $_SERVER['QUERY_STRING']);
    $class = $url == $link ? 'active' : '';
    echo "<a class=' $class' href='" . URL . "$link'>$title</a>";
}
