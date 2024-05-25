<?php

/**
 * 
 * get the base path
 * @param string and a $path 
 * @return string
 * 
 */

function basePath($path = "")
// dir for absolute path
{
 return __DIR__ . '/' . $path;
}
