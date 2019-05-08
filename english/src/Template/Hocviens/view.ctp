<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hocvien $hocvien
 */
?>
<?php echo $this->element('sidebar'); ?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('Edit Hocvien'), ['action' => 'edit', $hocvien->id]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Form->postLink(__('Delete Hocvien'), ['action' => 'delete', $hocvien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hocvien->id)]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Hocviens'), ['action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Hocvien'), ['action' => 'add']) ?><!-- </li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="hocviens view large-9 medium-8 columns content">
    <h3><?= h($hocvien->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($hocvien->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($hocvien->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($hocvien->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($hocvien->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hocvien->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($hocvien->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhoneNumber') ?></th>
            <td><?= $this->Number->format($hocvien->phoneNumber) ?></td>
        </tr>
    </table>
</div>
