<h1>THIS IS OUR CUSTOM THEME</h1>

<?php
// function myFrirst() {

//     echo "<p>first function </p>";
// }


function greet($name,$color){
    echo "<p> Hello my name is $name and my favorite color is $color</p>";

}
// myFrirst();
greet('john','blue');
greet('jane','green');

?>
<!-- 
<p>Hello my name is sal and my favorite color is blue</p>
<p>Hello my name is sal and my favorite color is blue</p> -->

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>