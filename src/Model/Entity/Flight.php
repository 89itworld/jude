<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flight Entity.
 *
 * @property int $id
 * @property string $expedia_legId
 * @property string $userId
 * @property int $departure_time
 * @property \Cake\I18n\Time $arrival_time
 * @property string $arrival_location
 * @property string $arrival_code
 * @property string $departure_location
 * @property string $departure_code
 * @property int $seats_remaining
 * @property \App\Model\Entity\Price $price
 * @property \App\Model\Entity\FlightPrice[] $flight_prices
 */
class Flight extends Entity
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
