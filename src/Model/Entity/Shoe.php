<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shoe Entity
 *
 * @property int $id
 * @property string $name
 * @property bool $availability
 * @property string $backgroundcolour
 * @property string $shoetext
 * @property string $brandname
 * @property string $shoetype
 * @property string $shoename
 * @property string $footername
 * @property string $image
 */
class Shoe extends Entity
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
        'availability' => true,
        'backgroundcolour' => true,
        'shoetext' => true,
        'brandname' => true,
        'shoetype' => true,
        'shoename' => true,
        'footername' => true,
        'image' => true,
    ];
}
