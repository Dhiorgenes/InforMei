<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DayProduct Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date_
 * @property int $quantity
 * @property int $products_id
 *
 * @property \App\Model\Entity\Product $product
 */
class DayProduct extends Entity
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
        'date_' => true,
        'quantity' => true,
        'products_id' => true,
        'product' => true
    ];
}
