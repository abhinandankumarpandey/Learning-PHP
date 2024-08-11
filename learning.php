
//ctrl + f5 to refresh php page in browser

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //using constants
    define("pi",3.14);   //this will show pi = 3.14 every ehere we write pi
    echo pi;

    echo "<br>";
    //comments
    #comments
    /* mulitpli comment */


    //varibalse  stntax   $variable name =values;
    $language = 45;
    $floats =34.64;

    //strings in php
    $alphabesVar = "This is string";
$lenofstring =strlen($alphabesVar);  //this will show the length of the string
echo "<br>";
// . is used for string concatinate operation
echo $lenofstring ."is length of ". $alphabesVar; 
//count the number of words in the string
echo "<br>";
echo str_word_count($alphabesVar); //this will show the length of the string
/*
reverse the string
strrev($variabelname);  --reverse the string
strpos($variabelname, "stringwords");    --gives the position of the string
str_replace("is:,"at",$variablename); --replace the word is to at in 
*/




    //varible name is case sensitive
    //expect variable name everything is incase sensitive
    EcHo "This is from an incase sensitive echo";
    echo "<br>";
    echo $alphabesVar;
    echo "<br>";
    echo $language;
    echo "<br>";
    $boolu = true;
    $fallu = false;
    echo $boolu; 
    echo "<br>";   
    echo $fallu;
    echo "<br>";
    echo "hlow sir";
    echo "<br>";
    //array   --indexed array
    echo "arrays now";
 $arr=array(1,2,3,"Four");
 echo $arr[0];
 echo "<br>";
 echo $arr[3];
 echo "<br>";

//association array   --it can be null also
 $anotherarr=array("Name"=>"Abhinandan","LastName"=>"Pandey","Class"=>4,null =>"this is null");
echo "<br>";
echo count($anotherarr);  //this will count the number of elements in array
echo "<br>";

 echo $anotherarr["Name"];

 echo "<br>";
 echo $anotherarr[null];    //wierd array with null 

 //object oreanted programing language 
 class Video {
    public $title = "PHP in 10 Minutes";
}

$my_video = new Video();
echo $my_video->title;


//  Resource   the special data type in  php
//refet to external resouce like file photo etc
$filehaibhai =fopen("hi.txt", "r");

if(is_resource($filehaibhai)){
    echo "<br>";
     echo "filehaibhai is a resource";
}
fclose($filehaibhai);
//null data type in php

$anull =NULL;
if(if_NULL($anull)){

echo "<br>";
echo "anull is null";
}
//so many prebuid functions are also in php 
/*
is_int($variable_name);   --chack is is integer or not
is_resource($variable_name); --
is_null($variable_name); --
is_float($variable_name); --
is_string($variable_name); --
is_bool($variable_name); --
is_array($variable_name); --
is_object($variable_name); --
*/

//logical
// (true and true)
//  or
//  not 
//xor  (true and false)  return true


//conditional statements in php
//if
$gemini = "AI";
if ($gemini == "AI") {
    echo "Gemini is an AI";
}
else{
    echo "Gemini is not an AI";
}

//switch statement
$numbers =1;
echo var_dump($numbers);  //show which datatype is this variable
switch($numbers){
    case 1:
        echo "One";
break;

    case 2:
            echo "Two";
            break;
    case 3 :
        echo "Three";
break;
        default:
        echo "IDK";
}

//while loop
while($numbers <= 10 ){
    echo "$numbers";
    $numbers++;
}


//do while loop  --run minimum 1 times
do{
    echo "$numbers";
    $numbers++;
}while($numbers <= 10 );


echo "<br>";


//for loop
for($i=1;$i<=4;$i++){
    echo "hello";
}

//for each loop  --used for arrays generally
$abras = array("hii", "this","is","array"," from"," for","each");
foreach($abras as $vaues){
    echo "$vaues";
}



//functions in php
function display_function(){
    echo "bye";
}
echo "<br>";
function parame($name){
    echo "hello $name";
}
//calling function
display_function();
parame("Abhinandan");


    ?>

//include "index.php";     ------this will include the file also but show warning also if error

//require "index.php";  ------this will include the file also but show warning  and the code will not further run fatal error also if error


<?php
//how php works with database   uplaod data to database 
$server ="localhost";
$username ="root";
$password ="";
$database ="safari";    //i already made a database named safari

//create a database connection
$connect = mysqli_connect($server,$username,$password,$database);
if(!$connect){
    die("Could not connect to database failed to connect ".mysqli_connect_error());
}
// else{
//     echo "Connected to database";
// }

$name  =$_POST["name"];      //if form is made 
$gender =$_POST["gender"];
$age =$_POST["age"];
$email =$_POST["email"];
$phone  =$_POST["phone"];
$descc  =$_POST["descc"];

//i can see the name also
echo $_POST['name'];   //this wil show the name
echo $_GET['name']; //this will show the name also in url when using form
echo $_REQUEST['name']; //this will show even with post and get methods in the from
echo $_SERVER['PHP_SELF'] ; //use while making form for action use php self to redirect in same page




//this is the SQL query to insert data into the database     --here safari is database and trip is table name
$sql = "INSERT INTO safari.trip (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name','$age ','$gender','$email','$phone','$descc',current_timestamp());";

//This will print the SQL query before executing it
 //print the sql query for debugging
    
 
 //echo $sql;   --for debugging purposes

//insert query to the database
if($connect->query($sql) == true){
    //echo "Data inserted successfully";
    $inserted = true;
}
else {
    echo"Error:$sql <br> $connect->error";
}









//getting data from the database
$sqlqry ="SELECT * from trip";

$result = $connect->query($sqlqry);
echo "mysqli_num_rows($result);";
echo "record founde in database";
//closing database connection
$connect->close();

//getting data from the database
$sqlqry ="SELECT * FROM trip";//here  safari.trip
$results = mysqli_query($conn,$sqlqry);
$num = mysqli_num_rows($results);

echo "total elements are " . $num;



//this will show all the elements of the trip table
while ($row = mysqli_fetch_assoc($results)){
    echo "<br>";
    echo "Name: " . $row["name"];
    echo "<br>";
    echo "Age: " . $row["age"];
    echo "<br>";
    echo "Gender: " . $row["gender"];
    echo "<br>";
    echo "Email: " . $row["email"];
    echo "<br>";
    echo "Phone: " . $row["phone"];
    echo "<br>";
    echo "Description: " . $row["other"];
    echo "<br>";
    echo "Date: " . $row["dt"];
    echo "<br>";
    echo "<hr>";
}
$conn->close();
// mysqli_close($conn);
?>


?>



</body>
</html>