<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khoahoc $khoahoc
 */
?>
<?php echo $this->element('sidebar'); ?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('Edit Khoahoc'), ['action' => 'edit', $khoahoc->id]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Form->postLink(__('Delete Khoahoc'), ['action' => 'delete', $khoahoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khoahoc->id)]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Khoahocs'), ['action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Khoahoc'), ['action' => 'add']) ?><!-- </li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="khoahocs view large-9 medium-8 columns content">
    <h3><?= h($khoahoc->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($khoahoc->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($khoahoc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($khoahoc->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuantityLesson') ?></th>
            <td><?= $this->Number->format($khoahoc->quantityLesson) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Category') ?></th>
            <td><?= $this->Number->format($khoahoc->id_category) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($khoahoc->description)); ?>
    </div>
</div>
