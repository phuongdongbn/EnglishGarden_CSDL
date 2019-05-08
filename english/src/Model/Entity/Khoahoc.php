<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Khoahoc Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $price
 * @property int $quantityLesson
 * @property int $id_category
 */
class Khoahoc extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'price' => true,
        'quantityLesson' => true,
        'id_category' => true
    ];
}
