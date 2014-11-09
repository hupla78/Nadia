

<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class TestsController extends AppController {

       

public function tt(){
        $arr2 = json_decode(file_get_contents('lapin.json'), true);
        $arr2['lap'] = 5;
        debug($arr2);
        die();

}

public function ta(){
        
        $lapin = array('anim'=>array('lapin','lion','cochon'),'objet'=>array('lit','table','livre'),'bom'=>'lapin');
        file_put_contents(APP.'cms/lapin.json',json_encode($lapin));
        debug($lapin);
        die();
}

}







?>