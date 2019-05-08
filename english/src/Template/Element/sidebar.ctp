<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/7/2019
 * Time: 11:31 PM
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><a><i class="fa fa-user"></i> Danh mục khóa học <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><?= $this->Html->link(__('Danh sách'), ['controller' => 'Danhmucs', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Thêm mới'), ['controller' => 'Danhmucs', 'action' => 'add']) ?></li>
            </ul>
        </li>
        <li><a><i class="fa fa-money"></i> Khóa học <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><?= $this->Html->link(__('Danh sách'), ['controller' => 'Khoahocs', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Thêm mới'), ['controller' => 'Khoahocs', 'action' => 'add']) ?></li>
            </ul>
        </li>
        <li><a><i class="fa fa-tags"></i> Bài học <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><?= $this->Html->link(__('Danh sách'), ['controller' => 'Baihocs', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Thêm mới'), ['controller' => 'Baihocs', 'action' => 'add']) ?></li>
            </ul>
        </li>
        <li><a><i class="fa fa-map-marker"></i> Giảng viên <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><?= $this->Html->link(__('Danh sách'), ['controller' => 'Giangviens', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Thêm mới'), ['controller' => 'Giangviens', 'action' => 'add']) ?></li>
                </li>
            </ul>
        </li>
        <li><a><i class="fa fa-building"></i> Học viên <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><?= $this->Html->link(__('Danh sách'), ['controller' => 'Hocviens', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Thêm mới'), ['controller' => 'Hocviens', 'action' => 'add']) ?></li>
            </ul>
        </li>
        <li><a><i class="fa fa-star"></i> Lớp học <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><?= $this->Html->link(__('Lops'), ['controller' => 'Danhmucs', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Lops'), ['controller' => 'Danhmucs', 'action' => 'add']) ?></li>
            </ul>
        </li>
    </ul>
</nav>
