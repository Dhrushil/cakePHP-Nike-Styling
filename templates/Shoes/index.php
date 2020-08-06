<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shoe[]|\Cake\Collection\CollectionInterface $shoes
 */
?>
<div class="shoes index content">
    <?= $this->Html->link(__('New Shoe'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Shoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('availability') ?></th>
                    <th><?= $this->Paginator->sort('backgroundcolour') ?></th>
                    <th><?= $this->Paginator->sort('shoetext') ?></th>
                    <th><?= $this->Paginator->sort('brandname') ?></th>
                    <th><?= $this->Paginator->sort('shoetype') ?></th>
                    <th><?= $this->Paginator->sort('shoename') ?></th>
                    <th><?= $this->Paginator->sort('footername') ?></th>
                    <th><?= $this->Paginator->sort('image_file') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shoes as $shoe): ?>
                <tr>
                    <td><?= $this->Number->format($shoe->id) ?></td>
                    <td><?= h($shoe->name) ?></td>
                    <td><?= h($shoe->availability) ?></td>
                    <td><?= h($shoe->backgroundcolour) ?></td>
                    <td><?= h($shoe->shoetext) ?></td>
                    <td><?= h($shoe->brandname) ?></td>
                    <td><?= h($shoe->shoetype) ?></td>
                    <td><?= h($shoe->shoename) ?></td>
                    <td><?= h($shoe->footername) ?></td>
                    <td><?php echo $this->Html->image($shoe->image_file); ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shoe->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shoe->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shoe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoe->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
