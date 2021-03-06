<?php 
namespace Polodev\ConvertCase;

include __dir__ . "/index.php";
function vd($args, $type) {
  echo "<pre>__{$type}__";
  var_dump($args);
  echo "</pre>";
}
function test_title_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->title_case()->output(), 'title_case' );
}
function test_upper_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->upper_case()->output(), 'upper_case' );
}
function test_lower_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->lower_case()->output(), 'lower_case' );
}
function test_snake_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->snake_case()->output(), 'snakecase' );
}
function test_screaming_snake_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->screaming_snake_case()->output(), 'screaming_snake_case' );
}
function test_camel_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->camel_case()->output(), 'camel_case' );
}
function test_pascal_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->pascal_case()->output(), 'pascal_case' );
}
function test_dot_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->dot_case()->output(), 'dot_case' );
}
function test_dash_case() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->dash_case()->output(), 'dash_case' );
}
function test_separate_with_forward_slashes() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->separate_with_forward_slashes()->output(), 'separate_with_forward_slashes' );
}
function test_separate_with_back_slashes() {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->separate_with_back_slashes()->output(), 'separate_with_back_slashes' );
}
function test_separate_words( $args = '__hello__world__' ) {
  $text = "hello world from dHaka, Bangladesh.";
  $case = new Convert( $text );
  vd ( $case->separate_words($args)->output(), 'separate_with_glue_' . $args );
}
test_snake_case();
test_screaming_snake_case();
test_title_case();
test_upper_case();
test_lower_case();
test_camel_case();
test_pascal_case();
test_dot_case();
test_dash_case();
test_separate_with_forward_slashes();
test_separate_with_back_slashes();

test_separate_words('__');
test_separate_words('--');
test_separate_words('&&');
test_separate_words('????');

echo "///////////////////////////////////////////////////////////////////////////";
$text = "hello world from dHaka, this_is_snake_case this-is-dash-case this-is- Bangladesh.";
echo Convert::to_title_case($text); // Hello World From Dhaka Bangladesh
echo "<br>";
echo Convert::to_lower_case($text); // hello world from dhaka bangladesh
echo "<br>";
echo Convert::to_upper_case($text); // HELLO WORLD FROM DHAKA BANGLADESH
echo "<br>";
echo Convert::to_snake_case($text); // hello_world_from_dhaka_bangladesh
echo "<br>";
echo Convert::to_screaming_snake_case($text); // HELLO_WORLD_FROM_DHAKA_BANGLADESH
echo "<br>";
echo Convert::to_camel_case($text); // helloWorldFromDhakaBangladesh
echo "<br>";
echo Convert::to_pascal_case($text); // HelloWorldFromDhakaBangladesh
echo "<br>";
echo Convert::to_separate_words($text, "__&&__"); // hello__&&__world__&&__from__&&__dhaka__&&__bangladesh
echo "<br>";
echo Convert::to_dot_case($text); // hello.world.from.dhaka.bangladesh
echo "<br>";
echo Convert::to_dash_case($text); // hello-world-from-dhaka-bangladesh
echo "<br>";
echo Convert::to_separate_with_forward_slashes($text); // hello/world/from/dhaka/bangladesh
echo "<br>";
echo Convert::to_separate_with_back_slashes($text); // hello\world\from\dhaka\bangladesh
echo "<br>";

