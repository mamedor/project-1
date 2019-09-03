<?php
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [];
// create multidimensionalarray to create quotes.
$quotes [] = [
     'quote' => "If you educate a man, you educate one person, if you educate a woman, you educate a nation.",
    "source" => "African Proverb.",
'citation' => " ",
'year'  => " ",];

$quotes [] = [ 'quote' => ' No person is born great, great people become great when others are sleeping.',
'source' => " unknown.",
'citation' => " ",
'year' => " ",];

$quotes[] = ['quote' => ' Some people want it happen, some wish it  would happen , others make it happen.',
'source' => ' Micheal Jordan.',
'citaion' => " ",
'year' => " ",];

$quotes[] = ['quote' => 'Those who accomplish great things pay attention to little ones.' ,
'source' => 'Ghanaian Proverb.',
'citation' => " ",
'year' => " ",];

 $quotes []= ['quote' => 'Life does not require that we be the best, only that we try our best.',
 'source' => 'Jackson Brown.',
'citation' => " ",
'year' => " ",];

 $quotes [] =['quote' => 'Try to be a rainbow in someones cloud.',
 'source' => 'Maya Angelou.',
 'citation' => 'Letter To My Daughter.',
 'year' => '2008.',];
 
 // Create the getRandomQuuote function and name it getRandomQuote
//function getRandomQuote ()//
 function getRandomQuote($quotes){
  global $quotes;
  return $quotes[array_rand($quotes)];
}
$callquotes = getRandomQuote($quotes);
//echo implode ("\n",$callquotes);
// Create the printQuote funtion and name it printQuote
function printQuote($callquotes) {
    global $quotes;
  $callquotes =  getRandomQuote($quotes);
  
 $myquote = " ";
 if ($callquotes ['citation'] && ['year'] == Null){
    '<p class= "quote" >' . $callquotes ['quote'] . '</p>';
       $myquote =  '<p class="source">' . $callquotes ['source']. '</p>';
 } else{
  $myquote =  '<p class= "quote" >' . $callquotes ['quote'] . '</p>';
 $myquote .=  '<p class="source">' . $callquotes ['source'].
 '<span class= "citation">' .$callquotes  ['citation'].'</span>'
   .'<span class= "year">' . $callquotes  ['year']. '</span> </p>';
 }
 
 echo $myquote;
}
//echo implode ("\n", $myquote);
?>