<?= $this->extend('temp/html') ?>


<?= $this->section('content')?>
		<section id="login-register">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 px-0 d-none d-sm-block">
						<div class="login-register">
							<img src="img/login-register.jpg" alt="" />
						</div>
					</div>
					<div class="col-sm-6">
						<div class="logo">
							<img src="img/kbc-logo.png" alt="" />
						</div>

						<div class="hello">
							<div class="form" >
								<p class="form-title">Welcome to KBC</p>
								<p>
									Login below to access your account
								</p>
								<?php if(session()->getFlashdata('wrong')): ?>
									<div class="alert alert-danger" role="alert">
										<?= session()->getFlashdata('wrong') ?>
									</div>
								<?php endif; ?>
								<form action="<?= base_url('login')?>" method="POST">
									<?= csrf_field() ?>
									<div class="input-container">
										<p>Email</p>
										<input
											placeholder="Enter your email"
											type="email" name="email" />
											<div class="form-text text-danger"><?= $validation->getError('email')?></div>
									</div>
									<div class="input-container">
										<p>Password</p>
										<input
											placeholder="Enter your password"
											type="password" name="password" />
											<div class="form-text text-danger"><?= $validation->getError('password')?></div>
									</div>
										<button
											class="submit"
											type="submit">
											Login
										</button>
								</form>

								<p class="link">
									Don't have an account?
									<a href="/register"> Sign Up</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?= $this->endSection() ?>