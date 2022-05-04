<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
  $trail->push('Home', route('home'));
});

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
  $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('booking', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Booking', route('booking'));
});

Breadcrumbs::for('checkout', function (BreadcrumbTrail $trail) {
  $trail->parent('booking');
  $trail->push('Checkout', route('checkout'));
});

Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Profile', route('account'));
});
