<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Baihoc $baihoc
 */
?>
<?php echo $this->element('sidebar'); ?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('Edit Baihoc'), ['action' => 'edit', $baihoc->id]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Form->postLink(__('Delete Baihoc'), ['action' => 'delete', $baihoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baihoc->id)]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Baihocs'), ['action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Baihoc'), ['action' => 'add']) ?><!-- </li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="baihocs view large-9 medium-8 columns content">
    <h3><?= h($baihoc->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($baihoc->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($baihoc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Times') ?></th>
            <td><?= $this->Number->format($baihoc->times) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Course') ?></th>
            <td><?= $this->Number->format($baihoc->id_course) ?></td>
        </tr>
    </table>
</div>
