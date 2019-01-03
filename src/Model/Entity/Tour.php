<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tour Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property float $price
 * @property \Cake\I18n\Time $start_date
 * @property \Cake\I18n\Time $end_date
 * @property string $time
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $city
 * @property int $status
 * @property int $created
 * @property \App\Model\Entity\TourImage[] $tour_images
 */
class Tour extends Entity
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
