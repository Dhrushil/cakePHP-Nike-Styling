<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shoe $shoe
 */
?>
<div class="shoes show">
<?php foreach ($shoes as $shoe): ?>
   <h3><?= ($shoe->name) ?></h3>
   
    <?= $this->Html->link(__('View'), ['action' => 'view', $shoe->id]) ?>
   <?php endforeach; ?>
</div>