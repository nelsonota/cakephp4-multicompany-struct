<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClieCliente Entity
 *
 * @property int $clie_codigo
 * @property string $clie_documento
 * @property string $clie_razao_social
 * @property string|null $clie_token
 * @property \Cake\I18n\FrozenTime $clie_created
 * @property \Cake\I18n\FrozenTime|null $clie_modified
 * @property \Cake\I18n\FrozenTime|null $clie_deleted
 *
 * @property \App\Model\Entity\UsuaUsuario[] $usua_usuario
 */
class ClieCliente extends Entity
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
        'clie_documento' => true,
        'clie_razao_social' => true,
        'clie_token' => true,
        'clie_created' => true,
        'clie_modified' => true,
        'clie_deleted' => true,
        'usua_usuario' => true,
    ];
}
