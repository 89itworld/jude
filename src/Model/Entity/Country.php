<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity.
 *
 * @property string $Code
 * @property string $Name
 * @property string $Continent
 * @property string $Region
 * @property float $SurfaceArea
 * @property int $IndepYear
 * @property int $Population
 * @property float $LifeExpectancy
 * @property float $GNP
 * @property float $GNPOld
 * @property string $LocalName
 * @property string $GovernmentForm
 * @property string $HeadOfState
 * @property int $Capital
 * @property string $Code2
 */
class Country extends Entity
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
        'Code' => false,
    ];
}
