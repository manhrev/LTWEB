<?php

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

function logged_in() {
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}

function get_user_id() {
    if (isset($_SESSION['uid'])) {
        return $_SESSION['uid'];
    }
    return false;
}

function get_user_name() {
    if (isset($_SESSION['username'])) {
        return $_SESSION['username'];
    }
    return false;
}

function is_admin() {
    if (isset($_SESSION['level']) && $_SESSION['level']==1) {
        return true;
    } else {
        return false;
    }
}

