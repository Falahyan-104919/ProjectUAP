<?= $this->extend('template/baselayout');?>
<?= $this->Section('content');?>

<div class="row mt-5">
    <div class="col-md">
        <div class="d-flex justify-content-center">
            <div class="card border-warning mb-3" style="width: 40rem;">
                <div class="card-header text-center"><strong><?=lang('Auth.register')?></strong></div>
                    <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="d-flex justify-content-center">
                                <div class="form-group col-md-9">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name='username' id="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" autocomplete="off">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name='password' id="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                    <label for="pass_confirm">Password Confirmation</label>
                                    <input type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name='pass_confirm' id="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name='email' id="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" autocomplete="off">
                                </div>
                                
                            </div>
                            <div class="text-centered" style="margin-left:30px; margin-top:10px; font-size:13px;">
                            <?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block" >
                                    <?=lang('Auth.register')?>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection();?>