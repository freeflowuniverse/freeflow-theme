<?php
use \yii\helpers\Url;
use yii\widgets\ActiveForm;
use \humhub\compat\CHtml;

$this->pageTitle = Yii::t('UserModule.views_auth_login', 'Login');
$this->registerCssFile('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
$this->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans');
$this->registerJsFile('https://code.jquery.com/jquery-3.3.1.min.js');
$this->registerJsFile('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
?>

<div class="container-fluid">
    <div class="row">
        <div class="d-none d-sm-block col-md-5">
            <div class="instructure">
                <img src="<?php echo Url::base(); ?>/themes/Freeflow/img/Freeflow-white-01.png">

                <div class="inst-text text-white">
                    <ul class="list-unstyled ml-5" id="regi-text">
                        <li>Step 1: Register with <span class="iyo p-0 text-uppercase font-weight-bold">ItsYou.<span class="font-weight-light">Online</span></span>
                            <span class="text-uppercase font-weight-bold">safe . secure . private</span>
                        </li>
                        <li>Step 2: Fill in your data</li>
                        <li>Step 3: Confirm your identity</li>
                        <li>Step 4: Welcome to FreeFlowPages!</li>
                    </ul>

                    <ul class="list-unstyled ml-5" id="sign">
                        <li>Login with <span class="iyo p-0 text-uppercase font-weight-bold">ItsYou.<span class="font-weight-light">Online</span></span> OR</li>
                        <li>Login with Username/Password</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="sign-card" id="login-form">
                <img src="<?php echo Url::base(); ?>/themes/Freeflow/img/Freeflow-white-01.png">

                <div class="inst-text text-white">
                    <ul class="list-unstyled ml-5" id="regi-text-sm">
                        <li>Step 1: Register with <span class="iyo p-0 text-uppercase font-weight-bold">ItsYou.<span class="font-weight-light">Online</span></span>
                            <span class="text-uppercase font-weight-bold">safe . secure . private</span>
                        </li>
                        <li>Step 2: Fill in your data</li>
                        <li>Step 3: Confirm your identity</li>
                        <li>Step 4: Welcome to FreeFlowPages!</li>
                    </ul>

                    <ul class="list-unstyled ml-5" id="sign-sm">
                        <li>Login with <span class="iyo p-0 text-uppercase font-weight-bold">ItsYou.<span class="font-weight-light">Online</span></span> OR</li>
                        <li>Login with Username/Password</li>
                    </ul>
                </div>

                <div class="form-box animated bounceIn">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Sign Up</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-center my-5" id="signin" role="tabpanel" aria-labelledby="signin">
                            <a href="<?php echo Url::base(); ?>/user/auth/external?authclient=itsyouonline" data-pjax-prevent class="btn text-white">Sign in
                                with <span class="iyo p-0 text-uppercase font-weight-bold bg-white">ItsYou.<span class="font-weight-light">Online</span></span></a>

                            <hr>
                            <span>OR</span>


                            <?php if (Yii::$app->session->hasFlash('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= Yii::$app->session->getFlash('error') ?>
                            </div>
                            <?php endif; ?>

                            <?php $form = ActiveForm::begin(['id' => 'account-login-form', 'options' => ['class' => "mt-3"], 'enableClientValidation' => false]); ?>
                            <div class="form-group">
                                <?= $form->field($model, 'username')->textInput(['id' => 'login_username', 'placeholder' => $model->getAttributeLabel('username'), 'options' => ["class" => "form-control"], 'aria-label' => $model->getAttributeLabel('username')])->label(false); ?>
                                <?= $form->field($model, 'password')->passwordInput(['id' => 'login_password', 'placeholder' => $model->getAttributeLabel('password'), 'options' => ["class" => "form-control"], 'aria-label' => $model->getAttributeLabel('password')])->label(false); ?>
                            </div>
                            <div class="custom-control custom-checkbox float-left">
                                <?= $form->field($model, 'rememberMe')->checkbox(); ?>
                            </div>
                            <?= CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), ['id' => 'login-button', 'class' => 'btn btn-primary btn-md btn-block']); ?>

                            <a id="password-recovery-link" class="password my-4" href="<?= Url::toRoute('/user/password-recovery'); ?>" data-pjax-prevent><br><?= Yii::t('UserModule.views_auth_login', 'Forgot your password?') ?></a>

                            <?= humhub\widgets\LanguageChooser::widget(); ?>

                            <?php ActiveForm::end(); ?>
                        </div>

                        <div class="tab-pane fade text-center my-5" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <a href="<?php echo Url::base(); ?>/user/auth/external?authclient=itsyouonline" class="btn btn-secondary text-white">Register
                                with <span class="iyo p-0 text-uppercase font-weight-bold">ItsYou.<span class="font-weight-light">Online</span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        // set cursor to login field
        $('#login_username').focus();
    });
    // Shake panel after wrong validation
    <?php if ($model->hasErrors()) { ?>
    $('#login-form').removeClass('bounceIn');
    $('#login-form').addClass('shake');
    $('#app-title').removeClass('fadeIn');
    <?php
} ?>
    // Shake panel after wrong validation
    <?php if ($invite->hasErrors()) { ?>
    $('#login-form').removeClass('bounceIn');
    $('#app-title').removeClass('fadeIn');
    <?php
} ?>

    let nav_tabs = document.querySelector('.nav-tabs');
    nav_link = document.querySelector('.nav-link');
    register = document.getElementById('regi-text');
    signin = document.getElementById('sign');
    registersm = document.getElementById('regi-text-sm');
    signinsm = document.getElementById('sign-sm');

    nav_tabs.addEventListener('click', function(e) {
        if (e.target.id == 'signin-tab') {
            register.style.display = 'none';
	    signin.style.display = 'block';
	    registersm.style.display = 'none';
            signinsm.style.display = 'block';
        } else if (e.target.id == 'register-tab') {
            signin.style.display = 'none';
	    register.style.display = 'block';
	    signinsm.style.display = 'none';
            registersm.style.display = 'block';
        }
    });
</script>

