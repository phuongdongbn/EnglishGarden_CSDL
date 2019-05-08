<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Danhmuc $danhmuc
 */
?>
<?php echo $this->element('sidebar'); ?>

<div class="danhmucs view large-9 medium-8 columns content">
    <h3><?= h($danhmuc->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tên') ?></th>
            <td><?= h($danhmuc->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mã') ?></th>
            <td><?= $this->Number->format($danhmuc->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Mô tả') ?></h4>
        <?= $this->Text->autoParagraph(h($danhmuc->description)); ?>
    </div>
</div>
