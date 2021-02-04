<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Page Entity
 *
 * @property int $id
 * @property string $name
 * @property string $action
 * @property int $page_status_id
 * @property int $tenant_id
 * @property int $order
 * @property string|null $content
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\PageStatus $page_status
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\Subpage[] $subpages
 */
class Page extends Entity
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
        'action' => true,
        'page_status_id' => true,
        'tenant_id' => true,
        'order' => true,
        'content' => true,
        'created' => true,
        'modified' => true,
        'page_status' => true,
        'tenant' => true,
        'subpages' => true,
    ];
}
