<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity
 *
 * @property int $id
 * @property string $name
 * @property int $tenant_id
 *
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\BannerImage[] $banner_images
 */
class Banner extends Entity
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
        'tenant_id' => true,
        'tenant' => true,
        'banner_images' => true,
    ];
}
