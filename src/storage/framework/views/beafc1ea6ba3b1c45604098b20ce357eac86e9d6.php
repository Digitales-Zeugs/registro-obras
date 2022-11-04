<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'SADAIC')); ?></title>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
    #verify button[type="submit"] {
        transform: none;
    }
    </style>
</head>
<body style="overflow: hidden">
<div id="start" class="step1">
    <div class="container-fluid login">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 text-center">
                <img src="<?php echo e(asset('/images/logo.png')); ?>" class="col-md-6 logo" />
                <h1>Bienvenidos</h1>
                <p>Por favor Iniciá sesión según tu tipo de usuario.</p>
                <ul id="loginSelection">
                    <li id="loginMembers"><img src="<?php echo e(asset('/images/icons/members.png')); ?>"><span class="label">Socios</span></li>
                    <li id="loginPlayers"><img src="<?php echo e(asset('/images/icons/players.png')); ?>"><span class="label">Intérpretes</span></li>
                    <li id="loginUsers"><img src="<?php echo e(asset('/images/icons/users.png')); ?>"><span class="label">Otros</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid register">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 text-center">
                <h3>¿Todavía no te registraste?</h3>
                <button type="button" class="btn" id="loginRegister">REGISTRATE</button>
            </div>
        </div>
    </div>
</div>

<div id="members" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Inicia sesión</strong> para poder operar
        en nuestro sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/members.png')); ?>">
        </div>
        <div class="header">
            <strong>SOCIOS</strong><br>
            INICIAR SESIÓN<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="formInput">
                    <label for="member_id">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input id="member_id" type="member_id"
                        <?php $__errorArgs = ['member_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class=" is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="member_id" value="<?php echo e(old('member_id')); ?>" required
                        autocomplete="member_id" autofocus placeholder="Socio">
                </div>

                <div class="formInput">
                    <label for="heir">
                        <img src="<?php echo e(asset('images/icons/heir-input.png' )); ?>">
                    </label>

                    <input id="heir" type="heir"
                        <?php $__errorArgs = ['heir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="heir"
                        required autocomplete="heir" autofocus placeholder="Heredero" value="0">
                </div>

                <div class="formInput">
                    <label for="password">
                        <img src="<?php echo e(asset('images/icons/password-input.png' )); ?>">
                    </label>

                    <input class="password" type="password"
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password"
                        required autocomplete="current-password" placeholder="Clave">
                </div>

                <div class="form-group row">
                    <div class="col-12 passwordRequest">
                    <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>#members">
                            ¿Olvistate tu clave?
                        </a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">INICIAR SESIÓN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="players" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Inicia sesión</strong> para poder operar
        en nuestro sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/players.png')); ?>">
        </div>
        <div class="header">
            <strong>INTÉRPRETES</strong><br>
            INICIAR SESIÓN<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="formInput">
                    <label for="player_id">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input id="player_id" type="player_id"
                        <?php $__errorArgs = ['player_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class=" is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="player_id" value="<?php echo e(old('player_id')); ?>" required
                        autocomplete="player_id" autofocus placeholder="Intérprete">
                </div>

                <div class="formInput">
                    <label for="password">
                        <img src="<?php echo e(asset('images/icons/password-input.png' )); ?>">
                    </label>

                    <input class="password" type="password"
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password"
                        required autocomplete="current-password" placeholder="Clave">
                </div>

                <div class="form-group row">
                    <div class="col-12 passwordRequest">
                    <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>#players">
                            ¿Olvistate tu clave?
                        </a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">INICIAR SESIÓN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="users" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Inicia sesión</strong> para poder operar
        en nuestro sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/users.png')); ?>">
        </div>
        <div class="header">
            <strong>USUARIOS</strong><br>
            INICIAR SESIÓN<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="formInput">
                    <label for="email">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input id="email" type="email"
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class=" is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="email" value="<?php echo e(old('email')); ?>" required
                        autocomplete="email" autofocus placeholder="Correo">
                </div>

                <div class="formInput">
                    <label for="password">
                        <img src="<?php echo e(asset('images/icons/password-input.png' )); ?>">
                    </label>

                    <input class="password" type="password"
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password"
                        required autocomplete="current-password" placeholder="Clave">
                </div>

                <div class="form-group row">
                    <div class="col-12 passwordRequest">
                    <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>#users">
                            ¿Olvistate tu clave?
                        </a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">INICIAR SESIÓN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="register" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Ingresa tus datos</strong> para poder registrarte
        en nuestro sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/users.png')); ?>">
        </div>
        <div class="header">
            <strong>USUARIOS</strong><br>
            REGISTRARSE<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(route('register')); ?>" id="formRegistration">
                <?php echo csrf_field(); ?>

                <div class="formInput">
                    <label for="name">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input id="name" type="text"
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class=" is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="name" value="<?php echo e(old('name')); ?>" required
                        autocomplete="name" autofocus placeholder="Apellido y Nombre">
                </div>

                <div class="formInput">
                    <label for="email">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input id="email" type="email"
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class=" is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="email" value="<?php echo e(old('email')); ?>" required
                        autocomplete="email" autofocus placeholder="Correo">
                </div>

                <div class="formInput">
                    <label for="phone">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input id="phone" type="tel"
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class=" is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="phone" value="<?php echo e(old('phone')); ?>" required
                        autocomplete="phone" autofocus placeholder="Teléfono">
                </div>

                <div class="formInput">
                    <label for="password">
                        <img src="<?php echo e(asset('images/icons/password-input.png' )); ?>">
                    </label>

                    <input class="password" type="password"
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password"
                        required autocomplete="current-password" placeholder="Clave">
                </div>

                <div class="formInput">
                    <label for="password_confirmation">
                        <img src="<?php echo e(asset('images/icons/password-input.png' )); ?>">
                    </label>

                    <input class="password" type="password"
                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password_confirmation"
                        required placeholder="Repetir Clave">
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">REGISTRARME</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('/js/login.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>