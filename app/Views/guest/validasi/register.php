<?= $this->extend('temp/html') ?>


<?= $this->section('content') ?>
        <section id="login-register">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="logo">
							<img src="img/kbc-logo.png" alt="" />
						</div>
                        <form action="/register" method="POST">
                            <?= csrf_field() ?>
                            <div class="hello">
                                <div class="form">
                                    <p class="form-title">Sign Up</p>
                                    <p>
                                        Please describe yourself as
                                        clearly!
                                    </p>

                                    <div class="input-container">
                                        <p>Full ibte</p>
                                       
                                        <input
                                            placeholder="Enter your full name"
                                            type="name" name="name" />
                                            <div class="form-text text-danger"><?= $validation->getError('name')?></div>
                                    </div>

                                    <div class="input-container">
                                        <p>Email</p>
                                        <input
                                            placeholder="Enter your email"
                                            type="email" name="email" />
                                            <div class="form-text text-danger"><?= $validation->getError('email')?></div>
                                    </div>
                                    
                                        
                                    

                                    <div class="input-container">
                                        <p>Phone number</p>
                                        <input
                                            placeholder="Example. +62851234xxxx"
                                            type="phone" name="phone" />
                                            <div class="form-text text-danger"><?= $validation->getError('phone')?></div>
                                    </div>
                                    
                                        
                                    

                                    <div class="input-container">
                                        <p>Password</p>
                                        <input
                                            placeholder="Enter your password"
                                            type="password" name="password" />
                                            <div class="form-text text-danger"><?= $validation->getError('password')?></div>
                                    </div>
                                    
                                        
                                    

                                    <div class="input-container">
                                        <p>Confirm password</p>
                                        <input
                                            placeholder="Enter your password"
                                            type="password" name="confir" />
                                    </div>

                                   
                                        <button
                                            class="submit"
                                            type="submit">
                                            Sign in
                                        </button>
                            

                                </form>
						
								<p class="link">
									Already have an account?
									<a href="login.html">Log In</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 px-0 d-none d-sm-block">
						<div class="login-register">
							<img src="img/login-register.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>

<?= $this->endSection(); ?>