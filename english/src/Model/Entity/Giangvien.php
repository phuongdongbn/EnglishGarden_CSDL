<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Giangvien Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $gender
 * @property int|null $age
 * @property string $email
 * @property int|null $phoneNumber
 * @property string|null $address
 */
class Giangvien extends Entity
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
        'gender' => true,
        'age' => true,
        'email' => true,
        'phoneNumber' => true,
        'address' => true
    ];
}
