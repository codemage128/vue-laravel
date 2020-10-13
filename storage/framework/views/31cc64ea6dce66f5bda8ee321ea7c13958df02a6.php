<?php $__env->startSection('title', 'Captain Profile'); ?>
<?php $__env->startSection('header'); ?>
	<page-header v-bind:param="<?php echo e($param); ?>"></page-header>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if($message = session('status')): ?>
    <captain-profile v-bind:message="<?php echo e(json_encode(['status' => 'success', 'body' => [$message]])); ?>" v-bind:user-info="<?php echo e($userInfo); ?>" v-bind:user-name="<?php echo e($userName); ?>"></captain-profile>
    <?php elseif($errors->any()): ?>
    <captain-profile v-bind:message="<?php echo e(json_encode(['status' => 'failed', 'body' => $errors->all()])); ?>" v-bind:user-info="<?php echo e($userInfo); ?>" v-bind:user-name="<?php echo e($userName); ?>" v-bind:old-input="<?php echo e(json_encode(old())); ?>"></captain-profile>
    <?php else: ?>
    <captain-profile v-bind:user-info="<?php echo e($userInfo); ?>" v-bind:user-name="<?php echo e($userName); ?>"></captain-profile>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>