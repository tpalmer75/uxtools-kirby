<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-bd3edaa4a7485c816d5827fd9307c2fd ');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('routes', array(
  array(
    'pattern' => 'tools/(:all)',
    'action'  => function() {
      return page('tools');
    }
  ),
  array(
    'pattern' => 'library/(:all)',
    'action'  => function() {
      return page('library');
    }
  )
));

// c::set('debug',true);