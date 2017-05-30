<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personas Model
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('personas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->requirePresence('id_empresa', 'create')
            ->notEmpty('id_empresa');

        $validator
            ->requirePresence('seguro', 'create')
            ->notEmpty('seguro');

        $validator
            ->dateTime('fecha_vto_seguro')
            ->requirePresence('fecha_vto_seguro', 'create')
            ->notEmpty('fecha_vto_seguro');

        $validator
            ->requirePresence('carnet_de_conductor', 'create')
            ->notEmpty('carnet_de_conductor');

        $validator
            ->requirePresence('clausula_de_no_rep', 'create')
            ->notEmpty('clausula_de_no_rep');

        $validator
            ->requirePresence('foto_path', 'create')
            ->notEmpty('foto_path');

        $validator
            ->dateTime('fecha_carga')
            ->requirePresence('fecha_carga', 'create')
            ->notEmpty('fecha_carga');

        $validator
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->dateTime('fecha_entrega_tarjeta')
            ->requirePresence('fecha_entrega_tarjeta', 'create')
            ->notEmpty('fecha_entrega_tarjeta');

        $validator
            ->requirePresence('credencial', 'create')
            ->notEmpty('credencial');

        $validator
            ->requirePresence('id_sector', 'create')
            ->notEmpty('id_sector');

        $validator
            ->requirePresence('dia_correspondiente', 'create')
            ->notEmpty('dia_correspondiente');

        $validator
            ->requirePresence('turno', 'create')
            ->notEmpty('turno');

        return $validator;
    }
}
