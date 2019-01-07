<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PO | Login</title>

   
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" type="text/css"rel="stylesheet">

    <link href="../css/animate.css" type="text/css"rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet">

</head>
<body class="gray-bg">
    <div>

			<div>

                <h1 class="logo-name" align="center">PO</h1>

            </div>
     

                <div class="form-group ">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                <div class="middle-box text-center loginscreen animated fadeInDown">

                    <form class="m-t" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                <div class="form-group "><?php echo e(__('Reset Password')); ?></div>

                        <div class="form-group ">

                         
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                                <button type="submit"  class="btn btn-primary block full-width m-b">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                        </div>
                    </form>
                </div>
         
    </div>
</div>
</body>
</html>
