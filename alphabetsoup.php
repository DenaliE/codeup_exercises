<?php 
//get input
// $string = trim(fgets(STDIN));

// //use space as delimiter for words
// $words = explode(' ', $string);
// print_r($words);

// foreach ($words as $letters) {

// //expects string
// // //splits words into letters. Spaces included.
// // $array = str_split($string);
// // print_r($array);

// //how do I sort the words individually?
// sort($letters, SORT_NATURAL | SORT_FLAG_CASE);

// var_dump($words);

// //convert back to string?
// // $sorted = implode(glue, pieces)

$string = trim(fgets(STDIN));

//use space as delimiter for words; create array.
$words = explode(' ', $string);

foreach ($words as $word) {
	// echo "$word\n";
	// take each word
	// split that word into an array of letters
	// sort those letters
	// ...
	$var = str_split($word);
	//print_r($var);
	$sorted = sort($var);
	// print_r(explode($sorted, $word));
	$var = implode('', $var);

	// construct a string with this operator:  .=
	echo $var .= " ";
}






