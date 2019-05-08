<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Danhmuc[]|\Cake\Collection\CollectionInterface $danhmucs
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="danhmucs index large-9 medium-8 columns content">
    <h3><?= __('Danh mục khóa học') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Mã') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($danhmucs as $danhmuc): ?>
            <tr>
                <td><?= $this->Number->format($danhmuc->id) ?></td>
                <td><?= h($danhmuc->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Xem chi tiết'), ['action' => 'view', $danhmuc->id]) ?> |
                    <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $danhmuc->id]) ?>|
                    <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $danhmuc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $danhmuc->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('trước')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('sau') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </div>
</div>
