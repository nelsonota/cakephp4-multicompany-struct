<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * UsuaUsuario Entity
 *
 * @property int $usua_codigo
 * @property int $usua_clie_codigo
 * @property string $usua_email
 * @property string $usua_senha
 * @property string $usua_nome
 * @property \Cake\I18n\FrozenTime $usua_created
 * @property \Cake\I18n\FrozenTime|null $usua_modified
 * @property \Cake\I18n\FrozenTime|null $usua_deleted
 */
class UsuaUsuario extends Entity
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
        'usua_clie_codigo' => true,
        'usua_email' => true,
        'usua_senha' => true,
        'usua_nome' => true,
        'usua_created' => true,
        'usua_modified' => true,
        'usua_deleted' => true,
    ];
    
    protected function _setUsuaSenha(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }

    public function toJson() {
        return [
            'codigo' => $this->usua_codigo,
            'nome' => $this->usua_nome,
            'email' => $this->usua_email,
        ];
    }

    public function toJsonList() {
        return [
            'codigo' => $this->usua_codigo,
            'nome' => $this->usua_nome,
        ];
    }
}
