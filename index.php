<?php
 	include('data.php'); 
 	include('fonction.php');
    session_start();
if ( !isset($_SESSION['mot'])) {
	$rapeto=rand(0,14);
    $_SESSION['mot']=$mot[$rapeto]['teny'];
    $_SESSION['indice']=$mot[$rapeto]['sopapa'];
    $_SESSION['lang']=$mot[$rapeto]['fiteny'];
    $_SESSION['def']=0;
    $_SESSION['val']=' ';
    $_SESSION['letter_number']=getvoid($_SESSION['mot']);
}
if (isset($_POST['sopapa'])) {
	$_SESSION['sopapa']=$_POST['sopapa'];
}
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Pendue</title>
</head>
<body>
		<?php if (isset($_SESSION['def']) && $_SESSION['def'] > 0): ?>
		<div id="sary"><img width="500" src="<?php echo $_SESSION['def'] ?>.png"></div>
	<?php endif ?>
	<div id="base" >
		<h3><popo>Teny</popo> : <?php echo $_SESSION['lang'];?><?php
		if (isset($_SESSION['sopapa'])) { ?>
		 	/ <popo>Sopapa</popo> : <?php echo $_SESSION['indice'];
		 } 
		?></h3>
		<table id='ta' border="1">
			<?php for ($i=0; $i < strlen($_SESSION['mot']); $i++) { ?> 
				<td id='styletd' >
					<?php if (isset($_SESSION['letter_number'][$i]) && $_SESSION['letter_number'][$i]==$_SESSION['mot'][$i]) : 
						echo $_SESSION['letter_number'][$i];
					endif ?>
					<?php if (comparelettre($_SESSION['val'],$_SESSION['mot'][$i])==TRUE): ?>
						<?php echo $_SESSION['val'];
						$_SESSION['letter_number'][$i] = $_SESSION['val'];
					endif ?>
				</td>
			<?php } ?>
		</table>
						<?php if (verifval($_SESSION['mot'],$_SESSION['letter_number'])==TRUE) { $_SESSION['win']=TRUE;?>

						<div class="end"><strong> Miarahaba anao nahita an'ilay teny ! </strong>&#129327; </div>
					<?php  
				} ?>
						<?php if ($_SESSION['def'] > 4): $_SESSION['win']=FALSE; ?>
			<div class="end"><strong>Noob eh! zao anefa ilay izy : <popo> <?php echo($_SESSION['mot']) ?></popo></strong>&#129327;</div>
		<?php endif ?>
		<?php if (!isset($_SESSION['win'])): ?>
		<div id="input">
			<form method="post" action="traitement.php">
				<input id="case" type="text" maxlength="1" name="val">
				<input id="cose" type="submit" value="Valideo">
			</form>
		</div>
		<?php endif; #echo $_SESSION['def']; ?>
		<form action="destroy.php">
			<input style="float: right;" type="submit" value="Recommencez !">
		</form>
				<?php if (!isset($_SESSION['sopapa'])): ?>
			<form action="index.php" method="post">
				<input style="float: right; margin-right: 5px;" type="submit" value="Sopapa" name="sopapa">
			</form>
		<?php endif ?>
	</div>
	<div id="foot"><span>Copyright 2022 : Fanix & Rodyox</span><span style="float: right; margin-right: 10px;">Version 2.6</span></div>
</body>
</html>