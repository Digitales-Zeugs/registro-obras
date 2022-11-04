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

    .badge {
        top: 20vh !important;
    }
    </style>
</head>
<body style="overflow: hidden">
<div id="members" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Ingresa tus datos</strong> para poder recuperar
        tu clave del sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/members.png')); ?>">
        </div>
        <div class="header">
            <strong>SOCIOS</strong><br>
            RECUPERAR CLAVE<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(url('/password/email')); ?>">
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
                    <label for="email">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input class="email" type="email"
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="email"
                        required autocomplete="current-email" placeholder="Correo Electrónico">
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">RECUPERAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="players" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Ingresa tus datos</strong> para poder recuperar
        tu clave del sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/players.png')); ?>">
        </div>
        <div class="header">
            <strong>INTÉRPRETES</strong><br>
            RECUPERAR CLAVE<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(url('/password/email')); ?>">
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
                    <label for="email">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input type="email"
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="email is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="email" value="<?php echo e(old('email')); ?>" required
                        autocomplete="email" autofocus placeholder="Correo">
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">RECUPERAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="users" class="step2">
    <div class="left-side">
        <img src="<?php echo e(asset('/images/logo-white.png')); ?>" class="logo" />
        <p><strong>Ingresa tus datos</strong> para poder recuperar
        tu clave del sistema de administración.</p>
        <span class="goBack">&#8592; Volver al inicio</span>
    </div>
    <div class="content">
        <div class="badge">
            <img src="<?php echo e(asset('/images/icons/users.png')); ?>">
        </div>
        <div class="header">
            <strong>USUARIOS</strong><br>
            RECUPERAR CLAVE<br>
            <img src="<?php echo e(asset('images/line.png' )); ?>">
        </div>
        <div class="formWrapper">
            <form method="POST" action="<?php echo e(url('/password/email')); ?>">
                <?php echo csrf_field(); ?>

                <div class="formInput">
                    <label for="email">
                        <img src="<?php echo e(asset('images/icons/members-input.png' )); ?>">
                    </label>

                    <input type="email"
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="email is-invalid" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        name="email" value="<?php echo e(old('email')); ?>" required
                        autocomplete="email" autofocus placeholder="Correo">
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-custom">RECUPERAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('/js/app.js')); ?>"></script>
<script>
    $('.goBack').on('click', () => {
        window.location = '/login' + window.location.hash;
    });

    $('#members form').on('submit', (event) => {
        axios.post('<?php echo e(url('/password/email')); ?>', $('#members form').serialize())
        .then((response) => {
            if (response.data.status == 'success') {
                toastr.info('Se envió un mail a la casilla de correo electrónico con instrucciones para continuar el proceso.');
            } else {
                for (const attr in response.data.errors) {
                    toastr.warning(response.data.errors[attr]);
                }
            }
        })
        .catch(({ response }) => {
            if (response.status == 422) {
                for (const attr in response.data.errors) {
                    toastr.warning(response.data.errors[attr]);
                }
            }
        });

        event.preventDefault();
    });

    $('#players form').on('submit', (event) => {
        axios.post('<?php echo e(url('/password/email')); ?>', $('#players form').serialize())
        .then((response) => {
            if (response.data.status == 'success') {
                toastr.info('Se envió un mail a la casilla de correo electrónico con instrucciones para continuar el proceso.');
            } else {
                for (const attr in response.data.errors) {
                    toastr.warning(response.data.errors[attr]);
                }
            }
        })
        .catch(({ response }) => {
            if (response.status == 422) {
                for (const attr in response.data.errors) {
                    toastr.warning(response.data.errors[attr]);
                }
            }
        });

        event.preventDefault();
    });

    $('#users form').on('submit', (event) => {
        axios.post('<?php echo e(url('/password/email')); ?>', $('#users form').serialize())
        .then((response) => {
            if (response.data.status == 'success') {
                toastr.info('Se envió un mail a la casilla de correo electrónico con instrucciones para continuar el proceso.');
            } else {
                for (const attr in response.data.errors) {
                    toastr.warning(response.data.errors[attr]);
                }
            }
        })
        .catch(({ response }) => {
            if (response.status == 422) {
                for (const attr in response.data.errors) {
                    toastr.warning(response.data.errors[attr]);
                }
            }
        });

        event.preventDefault();
    });

    if (window.location.hash) {
        if($(window).width() < 767) {
            $(window.location.hash).toggle();
        } else {
            $(window.location.hash).css('display', 'flex');
        }
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top
        }, 500);
    }
</script>
</body>
</html>
<?php /**PATH /var/www/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>