<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khoahoc $khoahoc
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="khoahocs form large-9 medium-8 columns content">
    <?= $this->Form->create($khoahoc) ?>
    <fieldset>
        <legend><?= __('Thêm khóa học') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('quantityLesson');
            echo $this->Form->control('id_category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Lưu')) ?>
    <?= $this->Form->end() ?>
</div>
