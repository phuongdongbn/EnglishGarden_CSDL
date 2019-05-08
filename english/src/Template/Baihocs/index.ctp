<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Baihoc[]|\Cake\Collection\CollectionInterface $baihocs
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="baihocs index large-9 medium-8 columns content">
    <h3><?= __('Baihocs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('times') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_course') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($baihocs as $baihoc): ?>
            <tr>
                <td><?= $this->Number->format($baihoc->id) ?></td>
                <td><?= h($baihoc->name) ?></td>
                <td><?= $this->Number->format($baihoc->times) ?></td>
                <td><?= $this->Number->format($baihoc->id_course) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $baihoc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $baihoc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $baihoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baihoc->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
