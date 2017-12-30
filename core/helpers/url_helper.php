<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($view_name, $data = [])
{
    extract($data);
    return require "../app/views/{$view_name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $page
 */
function redirect($page)
{
    header('location: ' . URLROOT . '/' . $page);
}
