<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shoe $shoe
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Shoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shoes form content">
            <?= $this->Form->create($shoe,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Shoe') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('availability');
                    echo $this->Form->control('backgroundcolour');
                    echo $this->Form->control('shoetext');
                    echo $this->Form->control('brandname');
                    echo $this->Form->control('shoetype');
                    echo $this->Form->control('shoename');
                    echo $this->Form->control('footername');
                    echo $this->Form->control('image_file', ['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
