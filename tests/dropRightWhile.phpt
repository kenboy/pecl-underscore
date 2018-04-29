--TEST--
chunk
--SKIPIF--
<?php
if (!extension_loaded('underscore')) {
	echo 'skip';
}
?>
--FILE--
<?php 
$users = [
  [ 'user' => 'barney',  'active' => false ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => true ]
];

var_dump(\_\dropRightWhile($users, function($user) { return $user['active']; }));
?>
--EXPECT--
array(2) {
  [2]=>
  array(2) {
    ["user"]=>
    string(7) "pebbles"
    ["active"]=>
    bool(true)
  }
  [1]=>
  array(2) {
    ["user"]=>
    string(4) "fred"
    ["active"]=>
    bool(true)
  }
}