<?php $__env->startSection('content'); ?>
   <h3>ini merupakan detail</h3> 
   <p><?php echo e($students['nama']); ?></p>
   <p><?php echo e($students['nim']); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ikura.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ikura/okay/resources/views/ikura/detail.blade.php ENDPATH**/ ?>