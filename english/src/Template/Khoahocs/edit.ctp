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
<!--        <li>--><?//= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $khoahoc->id],
//                ['confirm' => __('Are you sure you want to delete # {0}?', $khoahoc->id)]
//            )
//        ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Khoahocs'), ['action' => 'index']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="khoahocs form large-9 medium-8 columns content">
    <?= $this->Form->create($khoahoc) ?>
    <fieldset>
        <legend><?= __('Edit Khoahoc') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('quantityLesson');
            echo $this->Form->control('id_category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
