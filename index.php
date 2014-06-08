<!Doctype HTML>

<html>
  <head></head>
  
  <body>
    <!-- THis is a form to take user input-->
     <h2>Today, we are going to start form handling </h2>
    <form action="Form1.php" method="post">  <!--See the action and method attributes -->
    First Name: <input type="text" name="name"><br> <!-- This is simple input element , used to take user input  Name is what here-->
    E-mail: <input type="text" name="pemail"><br> <!-- This is email input element, used to take user email E-mail is what?, email is the name of the variale you choose , this variable is used by server for processing. -->
    <!-- Also notice name attribute name ="email" or name = "name", they are used as variables to store user information and used by server to process information -->
    PSex: <input type="text" name="gender"><br> <!-- this are shown to user, telling them what to enter. change it to see the difference-->
    <input type="submit"> <!-- This is simple submit button-->
    <input type="reset"> <!-- This is simple reset button -->
    </form>
    
    
    <?php
    # this is a comment
    /* This is multiple line comment like in c
    also // and # are used for single line comment */
    echo "Hello prerna";
    echo "<br/> Let's collobrate and build something nice!";

    /*
    Case Sensitivity does not work
    Echo "this will not work";
    ecHO "this will also not work"
    */
?>
    <h5> Variable case sensitivity</h5>

      <?php
       /* prerna type below an example of bad case sensitive variable use
       use w3schools for assistance
       */
        
      $Val=101; // you forgot the semicolon here, statements are terminated using semicolon as we are used to do in C. But in Python semicolon is optional
          echo "Value stored is " . $Val;
          
          /*
          //invalid variable reference
          echo "Use the value " .$val;
          */

          // Now lets print something on console..
          print "<br/>This is print function";
          echo "<br/>This is echo";
          print "<br/>both echo and print works";
          echo "<br/>but echo is faster than print, so always remember to use echo.";
          print "<br/>oh you semi-colon darling :D";
      ?>
    
    <h2> Strings </h2>
    <!-- This is an HTML comment, when working outside the php tag, use this way of commenting stuff..-->
    <!-- Please insert a php tag below, so that we can write php code there, prerna-->
    <?php
      // good now let's use string, string is anything that is inside colon 'this is a string' or "this is a stirng"
      // String variables also start with $ symbols (dollar), all variables start with $ symbol..
      $nitish = "nitish";
      $prerna = "prerna";
      echo "<br/>" .  $nitish . " loves " . $prerna;
      // now type a sentence that says prerna loves nitish below
      echo "<br/>" . $prerna . " also loves " . $nitish;
    ?>
    <h2> Numbers </h2>
     <?php
      $x = 5985;
      var_dump($x);
      echo "<br>"; 
      $x = -345; // negative number 
      var_dump($x);
      echo "<br>"; 
      $x = 0x8C; // hexadecimal number
      var_dump($x);
      echo "<br>";
      $x = 047; // octal number
      var_dump($x);
      //var_dump function dumps all the infromation about the variable or object passed though the parameter.
      //here we are storing the no and dumping it whats the use
      // please read the documentation, http://www.php.net/manual/en/function.var-dump.php
      // sometimes while coding, we may want to know about the type or structure of the object in use. So that we can process it in some other part.
      // until and unless we don't know if it is an integer, or a string or array, we would not be sure of what operations it allows us to do. 
      // lets try var_dump on array.
      echo "<br/>";
      $array = array(1, 2, array("a", "b", "c")); // I initialized array as we do in python LOL, u did then u r LOL
      var_dump($array);
      // Did you get what var_dump does??
      //If u will let me read that then only i will go through na
      // ok read, var_dump is a good function to debug programs.
      //when done ping me.
     
      ?>
    <h2>String functions </h2>
    <?php
     echo "<br/>";
     echo strlen("prerna");
     echo "<br/>";
     echo strlen("Nitish");
     echo "<br/>";
     echo strpos("hello world", "world"); // this will find the position of "world" in "hello world"
     echo "<br/>";
     $nice = strpos("Nitish loves prerna", "hate"); // as hate is not present it will return -1, but it returned nothing, yes
     var_dump($nice); // it returned bool false..check by running. So now you would have understood the use of var_dump function. yup, nice
    ?>
    
    <h2> Consonants </h2>
    <?php
      //Constants are like variables except that once they are defined they cannot be changed or undefined.
      define ("Nitish","Love",true); // what happened here?
      //unlike var. define is used to declare any constant instead of $(dollar) symbol, it takes 3 parameters....1st constant name, 2nd value of the constant, 3rd (optional) specifies whether name is case insensitive or not by default false that is case sensitive....  okie understood
       echo niTish; // done
    ?>
    
    <h2>Lets fast complete the very easy part of php. i.e . operators </h2>
    <?php 
    $x=10; 
    $y=6;
    echo "<br/>";
    echo ($x + $y); // outputs 16
    echo "<br/>";
    echo ($x - $y); // outputs 4
    echo "<br/>";
    echo ($x * $y); // outputs 60
    echo "<br/>";
    echo ($x / $y); // outputs 1.6666666666667
    echo "<br/>";
    echo ($x % $y); // outputs 4
    echo "<br/>";
        ?>
    
    <h2>Some more</h2>
    <?php 
    $x=10; 
    echo "<br/>";
    echo $x; // outputs 10
    echo "<br/>";
    $y=20; 
    $y += 100;
    echo $y; // outputs 120
    echo "<br/>";
    $z=50;
    $z -= 25;
    echo $z; // outputs 25
    echo "<br/>";
    $i=5;
    $i *= 6;
    echo $i; // outputs 30

    $j=10;
    $j /= 5;
    echo"<br/>";
    echo $j; // outputs 2
    echo "<br/>";
    $k=15;
    $k %= 4;
    echo $k; // outputs 3
        ?>
    
    <h2> IF ELSE , just a quick review of syntax </h2>
    <?php
     $var1 = 10;
     if ($var1 == 10) {
       echo "I am awesome.";
     } 
      else {
       echo "you are awesome";
     }
     echo "<br/>";
     $var2 = true;
      if ($var2 == true) {
        echo "Nitish loves prerna";
      } 
      else {
        echo "prerna loves nitish";
      }
     echo "<br/>";
    // type a ifelse of your choice below prerna
    if ($var1!== $var2) 
      {echo "I understood Identical operator";}
    else {echo "I need to go through operators lesson again";} // operators are easy , don't worry... ya i understood that

    ?>
    
    
    <!-- Switch case -->
    
    <h2> Switch Case </h2>
    <?php

        $favcolor="red";
        //very similar to C

        switch ($favcolor) {
          case "red":
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, or green!";
        }

    ?>
    
    <h2> While and dowhile</h2>
    <?php
    echo "<br/>";
    $x=1; 

    do {
      echo "The number is: $x <br/>";
      $x++;
    } while ($x<=5);

    $x=1; 
    echo "<br/>";
    while($x<=5) {
      echo "The number is: $x <br/>";
      $x++;
    }
    ?>
    
    <h2>For loops </h2>
    <?php 
     //For loops

     for($i=0; $i<=10; $i++){
       echo $i;
       echo "<br/>";
     }
     
     // now use foreach loopping mechanism. foreach is used to loop for iterative data types such as arrays
    $looper = array('1','2','3','nitish','loves','prerna');
    foreach ($looper as $value) {  
      echo "<br/>" . $value;
      //value is what? value is a temporary variable that stores the value of each item of the array , one by one..
    }// for first loop, $value is 1, 2ndloop is 2 and so on. It is used to store the current value of the for loop. and with that instance variable
// we can perform operations like print, adding etc.

    // try a for each loop yourself.
    $ary1=array('Hello','1','2','3','learning','Loops');
    echo "<br/>"; // why you put break here? here i put <br> to change line so that next loop values display in new line, okie..
    foreach($ary1 as $value)
        {
          echo $value;//I wanted to display in single line.
      }
     //good work, foreach clear huya?
     // use foreach only when you have to go through each item in the collection ONCE. it is a very useful function.
    ?>
    
    <br/>  <!-- this is pure html , ya i got it. -->
    <!-- lets learn fucntions -->
    
    <h2> Functions </h2>
    <?php
    function writeMsg() {
      echo "Hello world!";
    }
    
    echo "<br/>";
    //write a function that takes an argument and prints "hello , argument"

    function helloUser($name){
        echo $name."<br>";
      // write the function prerna
    }
    
    helloUser("nitish");
    helloUser("prerna");
    writeMsg(); // call the function
  
    function fibonacii($limit = 3 ){  //default argument is 3 
      echo "<br/> Fibonacci Series Upto " . $new = $limit+3 . " places"; // good job ! looks good and very informative. Can't we add here and display sum?
      $count = 0;
      $i = 0;
      $j = 1;
      echo "<br/>". $i . "<br/>".$j."<br/>"; // thanks for fixing the bug
      echo "Starting to calculate from here . <br/>";
      while ($count <= $limit ) {
        $k = $i + $j;
        echo $k . "<br/>";
        $i = $j;
        $j = $k;
        $count += 1;        
      }
    }

    fibonacii(10);
    fibonacii(5); // working fine.
    fibonacii(); // default argument will kick in, $limit  is set to 3.
?>
    
    <h2>Work with Arrays </h2>
    <?php
    $cars=array("Volvo","BMW","Toyota",'Oddy also');
    echo "I like " . $cars[0] . ", " . $cars[1] . "," . $cars[2] . " and "  . $cars[3] . ".";
    ?>
    
    <!-- In PHP, there are three types of arrays:

Indexed arrays - Arrays with numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

--> 
    <!-- the above example was of indexed arrays --> 
    
    <h2> Associative Arrays </h2>
    <?php

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old."; // you got this right? ya but y using =>
    echo "<br/>";
    ?>
     
     <h1>Loop for Associative array</h1>
        <?php
    $age=array("Peter" => "35","Ben" => "37","Joe" => "43");

    foreach($age as $key => $value) {  // Now here, as $age is an datatype of key-value pair , we need to use two set of temporary variable i.e.
       // $x for the key and $x_value for the value of the key. I am not getting the meaning of =>.... i previous case also , => means that the key 
       // has value , the key is on the left side and the value is on the right side
       // this is similar to dictionary data-type in .NET., , , => is used for syntactical purposes only on w3schools where is its documentation
      echo "Key=" . $key . ", Value=" . $value;
      echo "<br>";
    }   
    ?>
    
    <h3> Sorting Arrays </h3>
    
    <?php
    $arr = array('100','25','13','47','59','6'); //:P lol
    shuffle($arr); // ye lo lol phla to galat likha tha na lol :P :P, shuffle karne sei hi hota wo tum pahla ni kiya tha aur mujjha ya function ni pata tha

    echo "<br/> Ascending order <br/>";

    sort($arr); // ascending sort
    foreach($arr as $num)
      echo $num . ", ";// ak line ma hi display karwata hai
        echo "<br/>";


    shuffle($arr);

    echo "<br/> Descendinging order <br/>";

    rsort($arr); //descending sort
    foreach($arr as $num)
      echo $num . ", ";
    echo "<br>";
    //shuffle($arr); Is it needed?

    echo "<br/> Associative Array in Ascending order by value <br/>";

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");


    shuffle($age);

    asort($age);  // sorts an associative array in ascending order, according to the value:
     foreach($age as $key => $value) // yaha pe galit tha, semantic error
      echo $value . ", ";

    
    echo "<br/> Associative Array in Ascending order by Key value <br/>";

    shuffle($age);


    ksort($age); //  sorts an associative array in ascending order, according to the key:
    foreach($age as $key => $value)
      echo $key . ", ";
    echo "<br>";

    echo "<br/> Associative Array in Descending order by value <br/>";

    shuffle($age);

    arsort($age); // sorts an associative array in descending order, according to the value:
    foreach($age as $key => $value)
      echo $value . ", ";
    echo "<br>";

    echo "<br/> Associative Array in Descending order by key value <br/>";

    shuffle($age);

    krsort($age);  // sorts an associative array in descending order, according to the key
     foreach($age as $key => $value)
      echo $key . ", ";
    echo "<br>";
    ?>
    
    <h2> Understanding SuperGlobals </h2>
    <?php 
    $x = 75; 
    $y = 25;

    function addition() { 
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    }

    addition(); 
    echo $z; 
    // $_SERVER is also a GLOBAL VARIABLE, that means it is avialable for the whole scope throughout the life of the web applciation.
    //$_SERVER stores all the information about the server. We can dereference it by passing the variable name into the $_SERVER
    // and it will output the desired results
    // As $_SERVER is server dependent, the values will change from server to server
    echo $_SERVER['PHP_SELF']; // refers to itself
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // the server name on which the php script is running
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; //
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; // this variable tells which client(browser) has requested for resources from the server
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>
    

     
    </body>
</html>
