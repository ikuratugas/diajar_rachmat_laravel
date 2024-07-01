<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ikura Apirianto</title>
</head>
<body>
  <div>
    <?php echo $__env->yieldContent('intro'); ?>
  </div>
  <?php echo $__env->make('ikura.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="konten-utama">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
</body>
</html><?php /**PATH /home/ikura/okay/resources/views/ikura/index.blade.php ENDPATH**/ ?>