<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FlightStop Entity.
 *
 * @property int $id
 * @property int $flights_id
 * @property \App\Model\Entity\Flight $flight
 * @property \Cake\I18n\Time $departure_time
 * @property \Cake\I18n\Time $arrival_time
 * @property string $arrival_code
 * @property string $arrival_location
 * @property string $departure_code
 * @property string $departure_location
 * @property string $airline_name
 * @property string $airline_code
 * @property int $flightNumber
 * @property string $operating_airline
 * @property int $distance
 * @property string $distance_units
 */
class FlightStop extends Entity
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
