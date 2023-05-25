<!-- //SCOPES TELLS ABOUT THE ACCESIBILITY OF AN VARIABLE.
// LOCAL// accesible locally not accesible outside 
// GLOBAL : used to make a variable accesible globally
// STATIC :to save the data data after the function executed -->

<?php
//  $x=1;
// function fun(){
//  global $y;
//    $y = 12;
//     global $x ;//   
//     echo $x; 
// }
// fun();
// echo $y;

function student(){
    static $rollno = 1; //static stores variable for the hole process.
    $rollno++;
    echo $rollno;
}
student();
student();
student();
student();


?>