<?php $__env->startComponent('mail::message'); ?>
Olá, você recebeu um novo contato a partir do seu site!

Nome: <b><?php echo e($reply_name); ?></b>

Email: <?php echo e($reply_email); ?>


Sobre: <?php echo e($subject); ?>


Mensagem

<?php $__env->startComponent('mail::panel'); ?>
    <?php echo e($message); ?>

<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>
