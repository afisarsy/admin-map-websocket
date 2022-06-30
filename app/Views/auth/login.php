<?=$this->extend("layouts/default")?>

<?=$this->section("styles")?>
	<?= link_tag('css/login.css') ?>
<?=$this->endSection()?>

<?=$this->section("content")?>

	<div class="card card-outline auth-card">
		<div class="card-header text-center bg-light">
			<a href="<?= base_url('/') ?>" class="h2 card-title">Admin Map Websocket</a>
		</div>
		<div class="card-body">
			<div class="row">
				<div id="container-login" class="col">
					<p class="login-subtitle text-muted">Sign in to Admin Map Websocket</p>
					<form action="<?= base_url('/auth/dologin') ?>" method="post">
						<?= csrf_field(); ?>
						<div class="input-group mb-1">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<span class="validation-text text-danger text-left mb-2"><?= isset($validation) ? display_error($validation, 'username') : ' ' ?></span>
						<div class="input-group mb-1">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<span class="validation-text text-danger text-left mb-2"><?= isset($validation) ? display_error($validation, 'password') : ' ' ?></span>
						<div class="input-group mb-3">
							<div class="col-4 ml-auto p-0">
								<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>
						</div>
					</form>
					<p class="mb-1">
						<a href="<?= base_url('/forgot-password') ?>">Forgot password</a>
					</p>
					<p class="mb-0">
						<a href="" class="login-form-toggle text-center">Register</a>
					</p>
				</div>
				<div id="container-register" class="col hidden">
				<p class="login-subtitle text-muted">Register to Admin Map Websocket</p>
					<form action="<?= base_url('/auth/doregister') ?>" method="post">
						<?= csrf_field(); ?>
						<div class="input-group mb-3">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="email" name="email" class="form-control" placeholder="Email">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<div class="col-4 ml-auto p-0">
								<button type="submit" class="btn btn-primary btn-block">Register</button>
							</div>
						</div>
					</form>
					<p class="mb-0">
						<a href="" class="login-form-toggle text-center">Login</a>
					</p>
				</div>
			</div>
		</div>
	</div>

<?=$this->endSection()?>

<?=$this->section("scripts")?>
	<?= script_tag('js/login.js') ?>
<?=$this->endSection()?>