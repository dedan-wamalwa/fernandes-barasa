<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('contact', 'Contact::index');
$routes->get('gallery', 'Gallery::index');
$routes->get('news', 'News::index');
$routes->get('admin', 'Admin::index');
$routes->get('manifesto', 'Home::manifesto');