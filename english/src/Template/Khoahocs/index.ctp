<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khoahoc[]|\Cake\Collection\CollectionInterface $khoahocs
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="khoahocs index large-9 medium-8 columns content">
    <h3><?= __('Khoahocs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantityLesson') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_category') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($khoahocs as $khoahoc): ?>
            <tr>
                <td><?= $this->Number->format($khoahoc->id) ?></td>
                <td><?= h($khoahoc->name) ?></td>
                <td><?= $this->Number->format($khoahoc->price) ?></td>
                <td><?= $this->Number->format($khoahoc->quantityLesson) ?></td>
                <td><?= $this->Number->format($khoahoc->id_category) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $khoahoc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $khoahoc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $khoahoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khoahoc->id)]) ?>
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
