<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity.
 *
 * @property int $id
 * @property int $expedia_hotel_id
 * @property string $userId
 * @property string $name
 * @property string $description
 * @property string $expedia_link
 * @property int $review
 * @property int $total_review
 * @property string $image_url
 * @property int $star_rating
 * @property string $free_parking
 * @property string $free_breakfast
 * @property string $Free_internet
 * @property string $remaining_count
 * @property string $type
 * @property string $search_session
 * @property \App\Model\Entity\HotelPrice[] $hotel_prices
 * @property \App\Model\Entity\HtoleAddress[] $htole_addresses
 */
class Hotel extends Entity
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
