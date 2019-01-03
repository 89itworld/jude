<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FlightPrice Entity.
 *
 * @property int $id
 * @property int $flight_id
 * @property \App\Model\Entity\Flight $flight
 * @property string $flight_legId
 * @property string $base_price
 * @property string $formatted_base_price
 * @property string $total_price
 * @property string $formatted_total_price
 * @property string $taxes_price
 */
class FlightPrice extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
