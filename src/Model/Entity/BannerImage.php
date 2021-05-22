<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BannerImage Entity
 *
 * @property int $id
 * @property int $banner_id
 * @property string $title
 * @property string|null $description
 * @property string|null $link
 * @property string $file_name
 * @property string $hash
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Banner $banner
 */
class BannerImage extends Entity
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
        'banner_id' => true,
        'title' => true,
        'description' => true,
        'link' => true,
        'file_name' => true,
        'hash' => true,
        'created' => true,
        'modified' => true,
        'banner' => true,
    ];
}
