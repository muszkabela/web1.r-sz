<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>  
<!--	<link rel="stylesheet" href="./styles/stilus.css" type="text/css"> -->
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>


<body>

<div class="jumbotron text-center">
	<header>
<!--		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>"> -->
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?>
		
	
		<h2><?= $fejlec['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
</div>


<?php // Navbar kezdete: ?>
 
            <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
                <ul class="navbar-nav">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li class="nav-item active" <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a  class="nav-link" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
            </nav>

<?php // Navbar eddig tart! ?>


<?php // oldalak (értsd.: tpl.php fájlok) meghívása a navigáció működéséhez: ?>
        <div >
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>



<?php //Lábléc hívása: ?>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>


</body>
</html>
