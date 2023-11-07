<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tabla1 Model
 *
 * @method \App\Model\Entity\Tabla1 newEmptyEntity()
 * @method \App\Model\Entity\Tabla1 newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tabla1> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tabla1 get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tabla1 findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tabla1 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tabla1> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tabla1|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tabla1 saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tabla1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tabla1>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tabla1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tabla1> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tabla1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tabla1>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tabla1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tabla1> deleteManyOrFail(iterable $entities, array $options = [])
 */
class Tabla1Table extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tabla1');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 6)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
