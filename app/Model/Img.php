<?php
App::uses('AppModel', 'Model');
/**
 * Img Model
 *
 */
class Img extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'name';
	public $hasOne = array('cm');

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'id_user' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'format' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'avatar_file'=> array(
			'rule' => array('fileExtension',array('jpeg','jpg','png'),false),
			'message' => 'merci d\'envoyer une image.',
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations


		)
	);

	public function fileExtension($check, $extensions , $empty){
		$file = current($check);

		if($empty && empty($file['tmp_name'])){return true;}

		$extension = strtolower(pathinfo($file['name'].PATHINFO_EXTENSION));
		return in_array($extension,$extensions);
	}

	public function afterSave($created,$options = array()){


		if(!array_key_exists ('value',$this->data['Img'])){
			$ext = substr($this->data['Img']['img_file']['name'],-3);
		//	$this->data = $this->findById($this->data['Img']['id']);
			$this->data['Img']['value']=$this->data['Img']['id'].'.'.$ext;
		//	$this->save();
			debug($this->data);
		}



	
	$var = $this->data['Img']['img_file'];
		if(!empty($var)){
			echo IMAGES.'import'.DS.$this->data['Img']['value'];

move_uploaded_file($var['tmp_name'],IMAGES.'import'.DS.	$this->data['Img']['id'].'.'.substr($this->data['Img']['img_file']['name'],-3));
			$this->data['Img']['img_file']= array();	
			$this->save();
		}
	


	}

/*	public function beforesave($options =array())
	{
		$this->data['Img']['value']=$this->data['Img']['id'].'.'.substr($this->data['Img']['img_file']['name'],-3); 
}*/


/*	public function beforeValidate($options = array()){

		$this->validator()->add(
			'img_file',array(
				'notEmpty'=>array(
					'rule'=>array('notEmpty'),
					'message'=>'merci de mettre un fichier'))
				);

a	}
 */
}?>
