<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hocvien $hocvien
 */
?>
<?php echo $this->element('sidebar'); ?>
<div class="hocviens form large-9 medium-8 columns content">
    <?= $this->Form->create($hocvien) ?>
    <fieldset>
        <legend><?= __('Add Hocvien') ?></legend>
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
