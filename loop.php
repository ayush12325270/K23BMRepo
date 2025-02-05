<?php
// $i=1;
// while($i<=5)
// {
//     echo "The value of :".$i."\n";
//     $i++;
// }




// $j=10;
// while($j>=1)
// {
//     echo "The value of :".$j."\n";
//     $j--;
// }



// $z=1;
// do{
//     echo "The value of :".$z."\n";
//     $z++;
// }
// while($z<10)


// for($i=10;$i<=0;$i--)
// {
//     echo "The value of :".$i."\n";
// }


// $colors = array("Red","Green","Blue");
// //loop through colors array
// foreach($colors as $value){
//     echo $value ."\n";
// }



// $superhero = array(
//     "name" => "Peter Parker", "email" => "Peterparker@mail.com", "age" => 18, "add" => "LPU"
// );

// //Loop through superhero array
// foreach($superhero as $key){
//     echo $key. "\n";
// }



// for($i=1;$i<=10;$i++){
//     echo $i ."\n";
//     if($i==5){
//         break;
//     }
// }



// for($i=1;$i<=3;$i++){
//     for($j=1;$j<=3;$j++){
//         echo "$i $j" . "\n";
//         if($i==2 && j==2){
//             break;
//         }
//     }
// }



// $i=10;//initialization
// do{
//     echo "The value of I:".$i."\n";
//     $i--;
// }while($i>0);



// for($i=10;$i>0;$i--)
// {
//     echo "The value of I:".$i."\n";
// }

// $a=array("Aman","Mohan");
// foreach($a as $b)
// {
//     echo $b."\n";
// }



// $n=readline("Enter any number: ");
// for($i=1; $i<=$n; $i++)
// {
//     for($j=$n-$i; $j>0; $j--)
//     {
//     echo " ";
//     }
//     for($k=1; $k<=(2*$i-1); $k++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }





// $n=readline("Enter any number: ");
// if($n%2==0)
// {
//     echo "Even number";
// }
// else
// {
//     echo"Odd number";
// }



// $t = date("H");
// if($t<"10") {
//     echo"Have a good morning!";
// }elseif($t<"20") {
//     echo "Have a good day!";
// } else{
//     echo "Have a good night!";
// }






// $marks=78;
// if($marks<33){
//     echo "fail";
// }
// else if($marks>=34 && $marks<50){
//     echo "D grade";
// }
// else if($marks>=50 && $marks<65){
//     echo "C grade";
// }
// else if($marks>=65 && $marks<80){
//     echo "B grade";
// }
// else if($marks>=80 && $marks<90){
//     echo "A grade";
// }
// else if($marks>=90 && $marks<100){
//     echo "A+ grade";
// }
// else {
//     echo "invalid input";
// }




// $n = readline("Enter any Number: ");
// switch ($n) {
//     case 1.1:
//         echo "First case";
//         break;
//     case 2.1:
//         echo "second case";
//         break;
//     case 3.1:
//         echo "Third case";
//         break;
//     case 4.1:
//         echo "Fourth case";
//         break;
//     case 5.1:
//         echo "Fifth case";
//         break;
//     default:
//         echo "second case";
//         break;
// }





//array





    // $arr=array("Krishna","Mohan","Ravi");
    // //print_r($arr);
    // for($i=0;$i<count($arr);$i++)
    // {
    //     echo $arr[$i]."\n";
    // }



    // $ab=[1,2,3,4,5];
    // $i=0;
    // while($i<count($ab))
    // {
    //     echo $ab[$i]."\n";
    //     $i++;
    // }




    // foreach($ab as $c)
    // {
    //     echo $c."\n";
    // }



    // $arr1 = array(10, "asd", 1.55, false);
    // $arr2 = [10, "asd", 1.55, false];
    // foreach($arr1 as $c)
    // {
    //     echo $c."\n";
    // }



    // $arr1 = array("one"=>1, "two"=>2, "three"=>3);
    // foreach($arr1 as $key => $value)
    // {
    //     echo $key."=>".$value."\n";
    // }



//     $arr3 = array(array(10,20,30),
//     array("Ten", "Twwnty", "Thirty"),
//     array("physics"=>70, "chemistry"=>80, "maths"=>90)
// );
// echo "The required value:".$arr3[0][0]."\n";
// echo "The required value:".$arr3[0][1]."\n";
// echo "The required value:".$arr3[0][2]."\n";
// echo "The required value:".$arr3[1][0]."\n";
// echo "The required value:".$arr3[1][1]."\n";
// echo "The required value:".$arr3[1][2]."\n";
// echo "The required value:".$arr3[2][0]."\n";
// echo "The required value:".$arr3[2][1]."\n";
// echo "The required value:".$arr3[2][2]."\n";
// print_r($arr3);
// $arr3 = array(
//     array("Manoj",7.8,"pass"),
//     array("Aditya",8.5,"pass"),
//     array("Anuj",4.9,"fail")
// );
// for($i=0;$i<3;$i++)

// $books =
// array("C++" => array("name" => "Beginning with C","copies" =>8),
// "PHP"=>array("name"=>"Basics of PHP","copies" => 10),
// "Laravel" => array("name" => "MVC","copies"=> 3)
// );
// $keys = array_keys($books);
// for($i = 0;$i < count($books);$i++){
//     echo "<h1> $keys[$i]</h>";
//     foreach($books[$keys[$i]] as $key=>$value){
//         echo $key. "=" .$value."<br>";
//     }
// }


// $numbers = array(10,20,30,40,50);
// for ($i=0;$i<count($numbers); $i++)
// {
//     echo "numbers[$i] = $numbers[$i]\n";
// }



// $result = array(
//     array("Manoj", 7.8, "Pass"),
//     array("Aditya", 8.5, "Pass"),
//     array("Anuj", 4.9, "Fail")
// );
// for($i=0;$i<3;$i++)
// for($j=0;$j<3;$j++)
// {
//     echo $arr3[$i][$j]."\n";
// }
// foreach ($result as $row) {
//     echo "Name: " . $row[0] . ", Score: " . $row[1] . ", Status: " . $row[2] . "<br>";
// }




// $number=array(10,20,30,40,50,60,70,70,80,90);
// $i=count($number)-1;
// for($j=$i; $j>=0; $j--)
// {
//     echo "number[$j]"."=".$number[$j]."\n";
// }



// $book=["Php","python","C","C++","Java script","java"];
// sort($book);
// array_push($book,"laraval","ReactJs","Node Js");
// print_r($book);


// $student=array(
//     "name"=>"Aman Kumar",
//     "age"=>20,
//     "email"=>"aman123@gmail.com",
//     "add"=>"LPU Campus"

// );
// if(array_key_exists("age",$student))
// {
//     echo "age is exists\n";

// }
// else
// {
//     echo "age does not exists\n";

// }


// $arr3 = array(
//     array("Manoj", 7.8, "Pass"),
//     array("Aditya", 8.5, "Pass"),
//     array("Anuj", 4.9, "Fail")

// );
// unset($arr3[1][0]);
// unset($arr3[1][1]);
// unset($arr3[1][2]);
// print_r($arr3);





?>


