<?php
$a='a';
echo base_convert($a, 29, 10);

echo base_convert(base_convert($a, 29, 10)*base_convert($a, 29, 10),10,29);

for($i=1; $i<500; $i++){
    $ii=base_convert($i, 10, 29);
    echo $ii."------------------</br>";
    $pow=base_convert(bcpow(2, base_convert($i, 29, 10)), 10, 29);
    echo "power at base 29: ".$pow."------------------</br>";
       }

echo "</br>";


function charGo($ch)
{
    if ($ch=='0') return  'a';
    else if ($ch=='1') return 'b';
    else if ($ch=='2') return 'c';
    else if ($ch=='3') return 'd';
    else if($ch=='4') return 'e';
    else if($ch=='5') return 'f';
    else if($ch=='6') return 'g';
    else if($ch=='7') return 'h';
    else if($ch=='8') return 'i';
    else if($ch=='9') return 'j';
    else if($ch=='a') return 'k'; //11 
    else if($ch=='b') return 'l';
    else if($ch=='c') return 'm';
    else if($ch=='d') return 'n';
    else if($ch=='e') return 'o'; //15
    else if($ch=='f') return 'p';
    else if($ch=='g') return 'q';
    else if($ch=='h') return 'r';
    else if($ch=='i') return 's';
    else if($ch=='j') return 't'; //20
    else if($ch=='k') return 'u';
    else if($ch=='l') return 'v';
    else if($ch=='m') return 'w';
    else if($ch=='n') return 'x';
    else if($ch=='o') return 'y'; // 25
    else if($ch=='p') return 'z';
    else if($ch=='q') return ' ';
    else if($ch=='r') return '.';
    else if($ch=='s') return '!'; // 29
  else return "blya";
}

echo charGo('s');
$cc='5';
echo charGo($cc);

function changeStr($str)
{
    $newStr="";
     for($i=0; $i<strlen($str); $i++)
          $newStr=$newStr.charGo($str[$i]);
return  $newStr;
}    
echo "</br>";
echo changeStr("age")
?>

