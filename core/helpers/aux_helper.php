<?php

/**
 * Dump e die for debug.
 *
 * @param  string $name
 * @param  array  $data
 */
function dd($data=[])
{
    die(var_dump($data));
}
