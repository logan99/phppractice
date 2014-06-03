<!Doctype HTML>

<html>
  <head></head>
  
  <body>
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
      
    ?>
    </body>
</html>
