<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Danhmuc $danhmuc
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="danhmucs form large-9 medium-8 columns content">
    <?= $this->Form->create($danhmuc) ?>
    <fieldset>
        <legend><?= __('Thêm danh mục') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Lưu')) ?>
    <?= $this->Form->end() ?>
</div>
