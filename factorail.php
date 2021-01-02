<?php
$answer = "";
$msg = "";
if (isset($_POST["Go"])) {
    if (!empty($_POST["Number"]) || $_POST["Number"] == 0) {
        $num = substr(abs($_POST["Number"]), 0, 3);
        // $num = substr($num, 0, 3);
        if ($num >= 170) {
            $msg = '<div style="font-size: 2em;color: white;text-align: center;width: 100%;height: 50px;margin: 10px;background-color: #008000bf;">
            Your Input Should Be less than 171</div>';
        } else {
            ($num == 0) ? $answer = '<h1 style="text-align: center;color:blue;"> ANS = ' . 1 . '</h1>'
                : $answer = factorialCounter($num);
            // echo "<h2> Your Input " . abs($_POST['Number']) . "</h2>";
            $msg = '<h2> Your Input : ' . $num . '</h2>'
                . '<div style="font-size: 2em;color: white;text-align: center;width: 100%;height: 50px;margin: 10px;background-color: #008000bf;">Successfull!!</div>';
            // exit;
        }
    } else {
        $msg = '<div style="font-size: 2em;color: white;text-align: center;width: 100%;height: 50px;margin: 10px;background-color: #80000099;">Enter a valid Number!!</div>';
    }
}
function factorialCounter($num)
{
    $n = $num;
    $r = 0;
    $steps = "";
    for ($j = 1; $j < $n; $j++) {
        if ($j == 1) {
            $steps .= "\t( " . $n . " * (" . $n . "-" . $j . ") * ";
            $r =  ($n * ($n - $j));
        } else {
            $steps .= "\t(" . $n . "-" . $j . ") * ";
            $r *= ($n - $j);
        }
    }

    return "<span style='color:green;font-size:2em;'><u>Solution:</u> </span><br><br>" .
        "<div style='font-size:1.5em;padding-left:40px'>" . substr($steps, 0, strlen($steps) - 2) . ")</div>"
        . '<br><br><h1 style="text-align: center;color:blue;"> ANS = ' . $r . '</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="border: 1px solid black;">
        <h1 style="text-align: center;">
            <u>Formuala For Factorial</u>
        </h1>
        <h1 style="text-align: center;color:red;">
            n!= n*(n-1)*(n-2)*(n-3)....*1
        </h1>
        <div style="width:60%;margin:10px auto;border:olive 1px solid;padding:30px">
            <form action="" method="post">
                <input type="number" name="Number" style="width: 80%;padding:5px" placeholder="Number Of Objects">
                <input type="submit" name="Go" value="Calculate" style="width: 15%;padding:5px" />
            </form>
        </div>
        <div style="width:60%;margin:auto">
            <?php
            echo $msg;
            echo $answer;
            // $n = 5;
            // $c = 0;
            // for ($j = 1; $j < $n; $j++) {
            //     // if ($j == 1) {
            //     //     echo $a = $n * ($n - $j);
            //     //     echo " A<br> ";
            //     // } else {
            //     //     echo $b = ($n - $j);
            //     //     echo " <br>B<br> ";
            //     // }
            //     // echo "C= \t".$c = $a * $b;
            //     if ($j == 1) {
            //         // echo  $r = "(" . $n . "x(" . $n . "-" . $j . "))" . "\t=\t" .
            //         // echo $r = "\t(" . $n . "x(" . $n . "-" . $j . "))" . ($n * ($n - $j)) . "\t";
            //         echo $r = ($n * ($n - $j));
            //     } else {
            //         // echo  $r = "(" . $n . "-" . $j . "))" . "\t=\t" . 
            //         // echo  $r = "\t(" . $n . "-" . $j . ")" . ($n - $j) ;
            //         echo $r *= ($n - $j);
            //     }
            //     // echo "<br>";
            //     // echo $r*$r;
            // }
            ?>
        </div>
    </div>
</body>
<script>
    // let num = prompt("Enter a number  between 1 to 170");
    // let factorialCounter = (num) => {
    //     let n = num.substr(0, 3)
    //     var r = 0;
    //     for (let j = 1; j < n; j++) {
    //         if (j == 1) {
    //             // "\t(" . n . "x(" . n . "-" . j . ")) = "  . "\t";
    //             r = (n * (n - j));
    //             // "<br>";
    //         } else {
    //             //  "\t(" . n . "-" . j . ") = " . (n - j) . "\t<br>";
    //             r *= (n - j);
    //             // "<br>";
    //         }
    //     }
    //     alert(r);
    // }
    // factorialCounter(num);
    // var jq = document.createElement('script');
    // jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js";
    // document.getElementsByTagName('head')[0].appendChild(jq);
</script>

</html>
