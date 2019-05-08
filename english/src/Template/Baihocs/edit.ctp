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
<!--        <li>--><?//= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $baihoc->id],
//                ['confirm' => __('Are you sure you want to delete # {0}?', $baihoc->id)]
//            )
//        ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Baihocs'), ['action' => 'index']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="baihocs form large-9 medium-8 columns content">
    <?= $this->Form->create($baihoc) ?>
    <fieldset>
        <legend><?= __('Edit Baihoc') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('times');
            echo $this->Form->control('id_course');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
