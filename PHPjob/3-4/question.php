<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$port = ["80", "22", "21", "20"];
$weblanguage = ["PHP", "Python", "JAVA", "HTML"];
$mysql = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$port_correct = "80";
$weblanguage_correct = "HTML";
$mysql_correct = "select";

?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力--> <?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php
$port = ["80", "22", "21", "20"];
foreach ($port as $value) { 
    <input type="radio" name="port">
    <?php echo $value;?>
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php
$weblanguage = ["PHP", "Python", "JAVA", "HTML"];
foreach ($weblanguage as $value) { 
    <input type="radio" name="weblanguage">
    <?php echo $value;?>
}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php
$mysql = ["join", "select", "insert", "update"];
foreach ($mysql as $value) { 
    <input type="radio" name="mysql">
    <?php echo $value;?>
}
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
$test_answer = $_POST['test_answer'];