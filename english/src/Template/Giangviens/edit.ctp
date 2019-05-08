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
<!--        <li>--><?//= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $giangvien->id],
//                ['confirm' => __('Are you sure you want to delete # {0}?', $giangvien->id)]
//            )
//        ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Giangviens'), ['action' => 'index']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="giangviens form large-9 medium-8 columns content">
    <?= $this->Form->create($giangvien) ?>
    <fieldset>
        <legend><?= __('Edit Giangvien') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender');
            echo $this->Form->control('age');
            echo $this->Form->control('email');
            echo $this->Form->control('phoneNumber');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
