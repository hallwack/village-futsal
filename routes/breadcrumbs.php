<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
  $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('booking-admin', function (BreadcrumbTrail $trail) {
  $trail->parent('dashboard');
  $trail->push('Booking', route('admin.booking.index'));
});

Breadcrumbs::for('user-admin', function (BreadcrumbTrail $trail) {
  $trail->parent('dashboard');
  $trail->push('User', route('admin.user.index'));
});

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
  $trail->push('Home', route('home'));
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
