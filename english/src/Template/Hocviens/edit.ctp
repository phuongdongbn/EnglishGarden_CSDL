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
<!--        <li>--><?//= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $hocvien->id],
//                ['confirm' => __('Are you sure you want to delete # {0}?', $hocvien->id)]
//            )
//        ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Hocviens'), ['action' => 'index']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="hocviens form large-9 medium-8 columns content">
    <?= $this->Form->create($hocvien) ?>
    <fieldset>
        <legend><?= __('Edit Hocvien') ?></legend>
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
