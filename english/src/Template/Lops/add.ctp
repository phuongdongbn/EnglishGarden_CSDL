<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lop $lop
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="lops form large-9 medium-8 columns content">
    <?= $this->Form->create($lop) ?>
    <fieldset>
        <legend><?= __('Thêm lớp') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('id_course');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
