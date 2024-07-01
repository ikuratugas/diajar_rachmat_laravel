<?php $__env->startSection('content'); ?>
  <h1>ini utama nih... jangan di kore-kore</h1>    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('intro'); ?>
  <h4>okay ini intro</h4>
  <table border="1">
    <tr>
      <td>nama</td>
      <td>nim</td>
    </tr>
    
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td>
            <a href="/utamani/<?php echo e($item['nim']); ?>">
                <?php echo e($item['nama']); ?>

            </a>
          </td>
        <td><?php echo e($item['nim']); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ikura.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ikura/okay/resources/views/ikura/utamani.blade.php ENDPATH**/ ?>