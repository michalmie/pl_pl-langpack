<?php

$manifest = array(
    // only install on the following sugar versions (if empty, no check)
    array (
      'exact_matches' =>
        array (
        ),
      'regex_matches' =>
        array (
          0 => '7\.1\.1?'
        ),
    ),
    // Version for which this langpack can work
    'acceptable_sugar_flavors' =>
      array (
        0 => 'CE',
        1 => 'PRO',
        2 => 'ENT',
      ),

    // name of the Pack
    'name' => 'SuiteCRM Polish Lang Pack 7.1.1',

    // description of new code
    'description' => 'SuiteCRM PL LANG PACK 7.1.1',

    // author of new code
    'author' => '(Michal Mierzejewski) mmierzejewski@netzen.pl',

    // date published
    'published_date' => '2014/08/09',

    // version of code
    'version' => '7.1.1',

    // type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // Uninstall is allowed
    'is_uninstallable' => TRUE,
);

$installdefs = array(
	'id' => 'pl_pl',
	'copy' => array(
				array(
					'from' => '<basepath>/modules',
					'to'   => 'modules',
					),
				array(
					'from' => '<basepath>/include/language'),
					'to'   => 'include/language'
					),
				array(
					'from' => '<basepath>/install/language',
					'to'   => 'install/language',
					),
				array(
					'from' => '<basepath>/custom/language',
					'to'   => 'custom/language',
					),
);
?>
 
