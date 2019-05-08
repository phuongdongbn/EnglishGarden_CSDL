<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Giangvien $giangvien
 */
?>
<?php echo $this->element('sidebar'); ?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('Edit Giangvien'), ['action' => 'edit', $giangvien->id]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Form->postLink(__('Delete Giangvien'), ['action' => 'delete', $giangvien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $giangvien->id)]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Giangviens'), ['action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Giangvien'), ['action' => 'add']) ?><!-- </li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="giangviens view large-9 medium-8 columns content">
    <h3><?= h($giangvien->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($giangvien->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($giangvien->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($giangvien->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($giangvien->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($giangvien->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($giangvien->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhoneNumber') ?></th>
            <td><?= $this->Number->format($giangvien->phoneNumber) ?></td>
        </tr>
    </table>
</div>
