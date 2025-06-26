<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/services/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/services/detail.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/doctors/([a-zA-Z0-9_-]+)/?#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/doctors/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/actions/([a-zA-Z0-9_-]+)/?#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/actions/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/diagnostic/?(\\?.*)?$#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/diagnostic/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/reabilitation/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/reabilitation/detail.php',
    'SORT' => 200,
  ),
  9 => 
  array (
    'CONDITION' => '#^/reabilitation/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/reabilitation/index.php',
    'SORT' => 200,
  ),
  4 => 
  array (
    'CONDITION' => '#^/diagnostic/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/diagnostic/section.php',
    'SORT' => 200,
  ),
  6 => 
  array (
    'CONDITION' => '#^/services/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/services/section.php',
    'SORT' => 200,
  ),
  10 => 
  array (
    'CONDITION' => '#^/symptoms/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/symptoms/detail.php',
    'SORT' => 200,
  ),
  5 => 
  array (
    'CONDITION' => '#^/diagnostic/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/?(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/diagnostic/detail.php',
    'SORT' => 300,
  ),
);
