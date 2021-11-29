<?= $this->extend('template/baselayout');?>
<?= $this->Section('content');?>

<div class="row mt-5">
    <div class="col-md">
        <div class="d-flex justify-content-center">
            <div class="card border-warning mb-3" style="width: 50rem;">
                <div class="card-header text-center"><strong><?=lang('Auth.loginTitle')?></strong></div>
                    <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                        <div class="d-flex flex-row md-3">
                            <img src="img/koperasi.png" class="img-thumbnail" style=" width: 250px; height: 250px; margin-bottom: 10px; margin-right:20px;" alt="Profile Pincture">
                            <div class="col-lg mt-5">
                            <form action="<?= route_to('login') ?>" method="post">
						        <?= csrf_field() ?>
                        <?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.email')?></label>
							<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                        <?php else: ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                        <?php endif; ?>
                        <div class="form-group">
							<label for="password"><?=lang('Auth.password')?></label>
							<input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                            </div>
                            <?php if ($config->allowRegistration) : ?>
					        <p style="font-size: 13px;"><a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                            <?php endif; ?>
                            </div>
                        </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection();?>