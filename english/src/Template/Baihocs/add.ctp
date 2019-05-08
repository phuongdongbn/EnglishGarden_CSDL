<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Baihoc $baihoc
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="baihocs form large-9 medium-8 columns content">
    <?= $this->Form->create($baihoc) ?>
    <fieldset>
        <legend><?= __('Add Baihoc') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('times');
            echo $this->Form->control('id_course');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
