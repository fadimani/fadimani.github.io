<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php study</title>
    <style type="text/css"> 
        body{
            font-size:25px;
            background-color: #34568B;
            color: white;} 
        h1{color:#d92121;
            text-align:center;}
    </style>
</head>
<body><h1>BASICS OF PHP</h1>
    <h2>echo</h2>
    <?php
    echo "this is my first php script, i wrote this with echo <br> "; //equivilant to printf in c
    ?>


    <h2>VARIABLES</h2>
    <?php   //var declaartion
    $a="test"; //var type is allocated automatically
    $b=55;
    $c=12.8;
    echo "this is a $a $b $c <br>"; //html tags work between "" in php
    
    
    $text="first text";
    echo "hey hey, this is my $text <br>"; 
    echo "hey hey, this is my ". $text ."<br>"; //same outcome but this way is correct too
    echo "this", " is a ", "sequence of parametres", ", check code" , "<br>";
    echo "this is how we some nbs $b and $c: ";
    echo $b + $c, "<BR> <BR> <BR>";
            

    echo "this is <b>the var_dump fct</b>. it gives us the value and type of a var. here it is used on a var:  ";
    var_dump($c);
    echo "     ||     ", gettype($c);  //another way to know the type
    ?>


    <h2>echappement ''</h2>
    <?php
    echo 'between every "thing" is \echoed\ as it is. our old variables: $a, $b, $c, <u>but html tags still work tho don\'t worry</u>, except for the apostrophe tho \' you just gotta put \ before it. it\'s the caractere d\'echappement works on other echoes too. ';
    ?>
    <h2>chaine de caracteres</h2>
    <?php
    $text="helloooooo";
    echo "this is our chaine de caracteres: ", $text, "<BR>";
    echo "lets access its 2nd caracter: ", $text{1},"<BR>";
    echo "lets count how many caracters in our chaine: ", strlen($text), "<BR>";
    echo "lets reverse it now : ", strrev($text);
    ?>
    <h2>Déclaration des constantes</h2>
    <?php
    define("mail", "fadi.imani@uit.ac.ma");
    echo "this is my email: ", mail , "<BR>"; //csts dont need $ before em. and they are case sensitive by default
    echo "we have also the fct \"defined ('cst_name')\" that returns 1 if the cst has content and 0 if not. and its identical for variables where we use \"isset (\$var)\". or even destrow thr value held by the var by this fct \"unset (\$var)\" ";
    echo "here are some pre defined csts: ";
    ?>
    <img src="predefined.png" alt="stuff" width="500" height="250"> 
    <h2>Déclaration des tableaux associatives</h2>
    <?php
    $config=array("os"=>"windows 11", "browser"=>"chrome", "language"=>"english");
    print_r ($config); 
    echo "<BR>";
    $config1=array("os"=>"windows 11", "browser"=>"chrome", "language"=>"english");
    $config2=array("os"=>"mac", "browser"=>"safari", "language"=>"english");
    $config3=array("os"=>"linux", "browser"=>"tor", "language"=>"chinese");
    $configtot=array($config1,$config2,$config3);
    print_r ($configtot);
    ?>
    <h3>matrices:</h3>
    <?php
    $matrice = array( 
        array(5,4),
        array(2,3),
        array(8,2)
        );
    echo $matrice[1][1], "<BR>";
    $mois=array("Janvier","Février","Mars","Avril","Mai","Juin", "Juillet","Août","Septembre","Octobre","Novembre", "Décembre");
    $jour=array("Lundi","Mardi","Mercredi","Jeudi","Vendredi", "Samedi", "Dimanche");
    $date=array ($mois,$jour);
    print_r($date);
    echo "<BR>today is: ". $date[1][5]. " 25 ". $date[0][11]. " 2021 ";
    ?>
    <h2>FOREACH function:</h2>
    <?php
       $config2=array("os"=>"mac", "browser"=>"safari", "language"=>"english");
       $config3=array("os"=>"linux", "browser"=>"tor", "language"=>"chinese");
       echo "we got these two tableaux: <BR> ";
       print_r ($config3);
       echo "<BR>";
       print_r($config2);
       echo '<ul><BR>first way with Foreach ($tableau as $x):</ul> <BR>';
       foreach ($config2 as $x)
            {echo $x, "<BR>";}
            
        echo '<ul><BR>first way with Foreach ($tableau as $cle=>$x):</ul> <BR>';
        foreach ($config3 as $cle => $x)
        {
            echo $cle, " : ", "$x", "<BR>";
        }
    ?>


</body>
</html>