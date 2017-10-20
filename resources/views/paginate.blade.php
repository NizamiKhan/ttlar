<div class="container">
    <?php foreach ($users as $user): ?>
        <?php echo $user->name; ?>
    <?php endforeach; ?>
    <?php echo $users->render(); ?>
</div>

<?php echo $users->render(); ?>