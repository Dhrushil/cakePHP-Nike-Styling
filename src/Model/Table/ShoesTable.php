<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shoes Model
 *
 * @method \App\Model\Entity\Shoe newEmptyEntity()
 * @method \App\Model\Entity\Shoe newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Shoe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shoe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shoe findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Shoe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shoe[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shoe|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shoe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shoe[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shoe[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shoe[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shoe[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ShoesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('shoes');
        $this->setDisplayField('name');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('availability')
            ->requirePresence('availability', 'create')
            ->notEmptyString('availability');

        $validator
            ->scalar('backgroundcolour')
            ->maxLength('backgroundcolour', 20)
            ->requirePresence('backgroundcolour', 'create')
            ->notEmptyString('backgroundcolour');

        $validator
            ->scalar('shoetext')
            ->maxLength('shoetext', 300)
            ->requirePresence('shoetext', 'create')
            ->notEmptyString('shoetext');

        $validator
            ->scalar('brandname')
            ->maxLength('brandname', 50)
            ->requirePresence('brandname', 'create')
            ->notEmptyString('brandname');

        $validator
            ->scalar('shoetype')
            ->maxLength('shoetype', 50)
            ->requirePresence('shoetype', 'create')
            ->notEmptyString('shoetype');

        $validator
            ->scalar('shoename')
            ->maxLength('shoename', 50)
            ->requirePresence('shoename', 'create')
            ->notEmptyString('shoename');

        $validator
            ->scalar('footername')
            ->maxLength('footername', 50)
            ->requirePresence('footername', 'create')
            ->notEmptyString('footername');

        $validator
            ->notEmptyFile('image_file')
            ->uploadedFile('image_file', [
                'types' => ['image/png', 'image/jpg', 'image/jpeg'], // only PNG image files
                'minSize' => 1024, // Min 1 KB
                'maxSize' => 1024 * 1024 // Max 1 MB
            ]);
            

        return $validator;
    }
}
