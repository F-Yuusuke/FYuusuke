<?php
echo 'huhu';
echo'<br>';
echo 'ゆいちゃんがいなかったら終わってました。';
echo'<br>';
// 変数$i = 100; を用意し、100から1まで1つずつカウントダウンするプログラムを作成してください。 （1つずつ改行して表示して下さい）
$i = 100;
for($i <= 100; $i >= 1; $i--) {
    echo$i;
    echo'<br>';
}

// 正の整数1から9に、それぞれ3を掛けた数を半角スペース区切りで出力して下さい。
for($i = 1; $i <= 9; $i++) {
    echo$i * 3 . ' ';
}

// 1から100までの数をプリントするプログラムを書きなさい。 ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣とプリントし、3と5両方の倍数の場合には｢FizzBuzz｣とプリントすること。
for($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0) {
        echo'Fizz';
    } elseif ($i % 5 == 0) {
        echo'Buzz';
    } elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo'FizzBuzz';
    } else {
        echo$i;
    }
    echo'<br>';
}

// 1〜100までの数字を表示させるプログラムを作りましょう。 ※出力のレイアウトは下記のように表示すること（数字を10個表示したタイミングで改行する）
for($i = 1; $i <= 100; $i++) {
    echo$i.' ';
    if($i % 10 === 0) {
        echo'<br>';
    }
}

// 下記のような配列変数「alpha」があります。この配列のうち、'A'という文字が何回登場してくるか計算して結果を出力してください
$i = 0;
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
foreach ($alpha as $v) {
    if($v === 'A') {
        $i++;
    }
}  echo$i;
echo'<br>';

// 英語と数学で合格判定。英語と数学それぞれが60点以上かつ、合計点が140点以上の場合「合格！」それ以外は「残念！」と表示してください。
$english = 2;
$math = 70;
$total = $english + $math;

if($english >= 60 && $math >= 60 && $total >= 140) {
    echo'合格';
} else {
    echo'残念';
}
echo'<br>';

// 九九を表示するプログラムを書いてください。
// 以下のようなレイアウトで表示するようにしてください。
for($i = 1; $i <= 9; $i++) {
    for($j = 1; $j <= 9; $j++) {
        $res = $i * $j .' ';
        echo$res;
    } 
    echo'<br>';
} 

// 100以下の素数を表示するプログラムを書いてください。 素数とは、1とその数自身以外では割り切れない数です。 1
// は素数には含みません。 例: 7は1と7でしか割れないため素数です。
$primeNumbers = [];
for($i = 2; $i < 100; $i++) {
    for($j = 2; $j <= $i; $j++) {
        if($i % $j === 0 && $j < $i ) {
          break;
        }
        if($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);


