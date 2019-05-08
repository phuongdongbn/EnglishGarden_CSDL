<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Giangvien[]|\Cake\Collection\CollectionInterface $giangviens
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="giangviens index large-9 medium-8 columns content">
    <h3><?= __('Giangviens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phoneNumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($giangviens as $giangvien): ?>
            <tr>
                <td><?= $this->Number->format($giangvien->id) ?></td>
                <td><?= h($giangvien->name) ?></td>
                <td><?= h($giangvien->gender) ?></td>
                <td><?= $this->Number->format($giangvien->age) ?></td>
                <td><?= h($giangvien->email) ?></td>
                <td><?= $this->Number->format($giangvien->phoneNumber) ?></td>
                <td><?= h($giangvien->address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $giangvien->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $giangvien->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $giangvien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $giangvien->id)]) ?>
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
