<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property int $dni
 * @property int $id_empresa
 * @property string $seguro
 * @property \Cake\I18n\FrozenTime $fecha_vto_seguro
 * @property string $carnet_de_conductor
 * @property string $clausula_de_no_rep
 * @property string $foto_path
 * @property \Cake\I18n\FrozenTime $fecha_carga
 * @property string $telefono
 * @property \Cake\I18n\FrozenTime $fecha_entrega_tarjeta
 * @property string $credencial
 * @property int $id_sector
 * @property string $dia_correspondiente
 * @property string $turno
 */
class Persona extends Entity
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
        'id' => false
    ];
}
