<?php
$answer = "";
$msg = "";
if (isset($_POST["Go"])) {
    if ((!empty($_POST["Number"]) || $_POST["Number"] == 0) && (!empty($_POST["Places"]) || $_POST["Places"] == 0)) {
        // echo "akjsjdhkajsdjkalaksjflkahslkhasflkhaslkfh";
        echo        $num = substr(abs($_POST["Number"]), 0, 3);
        echo         $places = substr(abs($_POST["Places"]), 0, 3);
        // exit;
        if ($places > $num) {
            $msg = '<div style="font-size: 2em;color: white;text-align: center;width: 100%;height: 50px;margin: 10px;background-color: #80000099;">
            please enter n ≥ r ≥ 0</div>';
        } else {

            $steps = "<span style='font-size:2em;'> nCr = </span> <span style='margin-left:35px;font-size:2em;'>"
                . $num . "! </span> <br><span style='text-decoration-line: overline;margin-left:75px;font-size:2em; '>$places!(" . $num . "-" . $places . ")!</span>";
            $answer = ($num || $places == 0) ? $answer = '<h1 style="text-align: center;color:blue;"> ANS = ' . 1 . '</h1>'
                : CombinationCounter($num, $places);
            // echo "<h2> Your Input " . abs($_POST['Number']) . "</h2>";
            $msg = $steps
                // . '<h2> Your Input : ' . $num . '</h2>'
                . '<div style="font-size: 2em;color: white;text-align: center;width: 100%;height: 50px;margin: 10px;background-color: #008000bf;">Successfull!!</div>';
            // exit;
        }
    } else {
        $msg = '<div style="font-size: 2em;color: white;text-align: center;width: 100%;height: 50px;margin: 10px;background-color: #80000099;">Enter a valid Number!!</div>';
    }
}
function CombinationCounter($num, $places)
{
    $n = $num;
    $r = $places;
    $numerator = 0;
    $denumerator1 = 0;
    $denumerator2 = 0;
    $denum = $n - $r;
    for ($j = 1; $j < $n; $j++) {
        if ($j == 1) {
            $numerator = ($n * ($n - $j));
        } else {
            $numerator *= ($n - $j);
        }
    }
    for ($k = 1; $k < $r; $k++) {
        if ($k == 1) {
            $denumerator1 = ($r * ($r - $k));
        } else {
            $denumerator1 *= ($r - $k);
        }
    }
    for ($i = 1; $i < $denum; $i++) {
        if ($i == 1) {
            $denumerator2 = ($denum * ($denum - $i));
        } else {
            $denumerator2 *= ($denum - $i);
        }
    }
    $combination = ($numerator / ($denumerator1 * $denumerator2));
    return  '<br><br><h1 style="text-align: center;color:blue;"> ANS = ' . $combination . '</h1>';
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
        <div>
            <h1 style="text-align: center;">
                <u>Formuala For Permutation</u>
            </h1>
            <div style="text-align: center;color:red;">
                <span style='font-size:2em;margin-right:10px'> nCr = </span>
                <span style='margin-left:55px;font-size:2em;'> n! </span> <br>
                <span style='text-decoration-line: overline;margin-left:155px;font-size:2em; '> r!( n - r )!</span>
            </div>
            <div style="width:60%;margin:10px auto;border:olive 1px solid;padding:30px">
                <form action="" method="post">
                    <input type="number" name="Number" style="width: 40%;padding:5px" placeholder="Number Of Objects">
                    <input type="number" name="Places" style="width: 40%;padding:5px" placeholder="Number Of Places ">
                    <input type="submit" name="Go" value="Calculate" style="width: 15%;padding:5px" />
                </form>
            </div>
        </div>
        <div style="width:60%;margin:auto">
            <?php
            echo $msg;
            echo $answer;
            // $n = 5;
            // $r = 3;
            // $numerator = 0;
            // $denumerator1 = 0;
            // $denumerator2 = 0;
            // $denum = $n - $r;
            // for ($j = 1; $j < $n; $j++) {
            //     if ($j == 1) {
            //         $numerator = ($n * ($n - $j));
            //     } else {
            //         $numerator *= ($n - $j);
            //     }
            // }
            // for ($k = 1; $k < $r; $k++) {
            //     if ($k == 1) {
            //         $denumerator1 = ($r * ($r - $k));
            //     } else {
            //         $denumerator1 *= ($r - $k);
            //     }
            // }
            // for ($i = 1; $i < $denum; $i++) {
            //     if ($i == 1) {
            //         $denumerator2 = ($denum * ($denum - $i));
            //     } else {
            //         $denumerator2 *= ($denum - $i);
            //     }
            // }

            // echo $numerator;
            // echo "<br>";
            // echo $denumerator1 . "<br>";
            // echo $denumerator2 . "<br>";
            // echo $combination = ($numerator / ($denumerator1 * $denumerator2));
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