<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>

	<?php if ($sf_user->isAuthenticated()): ?>
	<div id="nav">
		<ul>
			<li><a href="#">Home</a>
			</li>
			<?php if ($sf_user->hasGroup("contabilidad") ): ?>
			<li><a href="#">Contabilidad</a>
				<ul>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 1</a>
						<ul>
							<li><a href="#">Opciones Adicionales</a></li>
							<li><a href="#">Opciones Adicionales</a></li>
						</ul></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 2</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 3</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 4</a></li>
					<?php endif; ?>
				</ul> <?php endif; ?> <?php if ($sf_user->hasGroup("produccion") ): ?>
			
			<li><a href="#">Producción</a>
				<ul>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 1</a>
						<ul>
							<li><a href="#">Opciones Adicionales</a></li>
							<li><a href="#">Opciones Adicionales</a></li>
						</ul></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 2</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 3</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 4</a></li>
					<?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php if ($sf_user->hasGroup("comercial") ): ?>
			<li><a href="#">Comercial</a>
				<ul>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 1</a>
						<ul>
							<li><a href="#">Opciones Adicionales</a></li>
							<li><a href="#">Opciones Adicionales</a></li>
						</ul></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 2</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 3</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 4</a></li>
					<?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
			<?php if ($sf_user->hasGroup("callcenter") ): ?>
			<li><a href="#">Call Center</a>
				<ul>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 1</a>
						<ul>
							<li><a href="#">Opciones Adicionales</a></li>
							<li><a href="#">Opciones Adicionales</a></li>
						</ul></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 2</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("impares")):?>
					<li><a href="#">Opción 3</a></li>
					<?php endif; ?>
					<?php if ($sf_user->hasPermission("pares")):?>
					<li><a href="#">Opción 4</a></li>
					<?php endif; ?>
				</ul>
			</li>
			<?php endif; ?>
			<li><a href="#">Común</a>
				<ul>
					<li><a href="#">Opción 1</a></li>
					<li><a href="#">Opción 2</a>
						<ul>
							<li><a href="#">Opciones Adicionales</a></li>
							<li><a href="#">Opciones Adicionales</a></li>
						</ul>
					</li>
					<li><a href="#">Opción 3</a></li>
					<li><a href="#">Opción 4</a></li>
				</ul>
			</li>
			<li><a href="<?php echo url_for("sf_guard_signout")?>">Salir</a></li>
		</ul>
	</div>
	<?php endif;?>
	<br /><br /><br /><br />
	<?php echo $sf_content ?>
</body>
</html>



