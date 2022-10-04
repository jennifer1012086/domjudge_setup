<?php declare(strict_types=1);
/**
 * Generated from 'autoload.php.in' on Mon Sep 19 17:28:05 UTC 2022.
 *
 * Autoload setup file for the Symfony application
 *
 * Part of the DOMjudge Programming Contest Jury System and licensed
 * under the GNU GPL. See README and COPYING for details.
 */

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

// Load the static domserver file if we don't have the constants from it yet
if (!defined('LIBVENDORDIR')) {
    require('/opt/domjudge/domserver/etc/domserver-static.php');
}

return require LIBVENDORDIR.'/autoload.php';
