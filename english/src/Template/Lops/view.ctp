<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lop $lop
 */
?>
<?php echo $this->element('sidebar'); ?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('Edit Lop'), ['action' => 'edit', $lop->id]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Form->postLink(__('Delete Lop'), ['action' => 'delete', $lop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lop->id)]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Lops'), ['action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Lop'), ['action' => 'add']) ?><!-- </li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="lops view large-9 medium-8 columns content">
    <h3><?= h($lop->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($lop->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Course') ?></th>
            <td><?= $this->Number->format($lop->id_course) ?></td>
        </tr>
    </table>
</div>
