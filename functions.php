<?php

//converts from base 10 to base 29;
function bcmath_baseconvert($str, $frombase=10, $tobase=29) {
    $str = trim($str);
    if (intval($frombase) != 10) {
        $len = strlen($str);
        $q = 0;
        for ($i=0; $i<$len; $i++) {
            $r = base_convert($str[$i], $frombase, 10);
            $q = bcadd(bcmul($q, $frombase), $r);
        }
    }
    else $q = $str;

    if (intval($tobase) != 10) {
        $s = '';
        while (bccomp($q, '0', 0) > 0) {
            $r = intval(bcmod($q, $tobase));
            $s = base_convert($r, 10, $tobase) . $s;
            $q = bcdiv($q, $tobase, 0);
        }
    }
    else $s = $q;

    return $s;
}


//normalize digits in base29 to latin letters with also ' ', '.' and '!' characters.
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
  else return "non";
}

//normalize numbers in base29 to latin word
function changeStr($str)
{
    $newStr="";
     for($i=0; $i<strlen($str); $i++)
          $newStr=$newStr.charGo($str[$i]);
return  $newStr;
}    

?>
