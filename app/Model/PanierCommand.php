<?php
App::uses('AppModel', 'Model');
/**
 * PanierCommand Model
 *
 * @property User $User
 * @property AdressePofile $AdressePofile
 */
class PanierCommand extends AppModel {

    /**
 * Display field
 *
 * @var string
 */
    public $displayField = 'id';

    public function isSend($id){
        $this->recursive =-1;
        $lap = $this->findById($id);

            $lap['PanierCommand']['state'] = "votre commande a éte envoyé le ".strftime("%d/%m/%Y");
            debug($lap);
            $this->save($lap);
    }

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'AdressePofile' => array(
            'className' => 'AdressePofile',
            'foreignKey' => 'adresse_pofile_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );




    public $hasMany = array(
        'PanierVente');
}
