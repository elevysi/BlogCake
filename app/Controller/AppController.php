<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array('Session',
			 'Auth' => array(
					        'loginRedirect' => array('controller' => 'posts', 'action' => 'timeline'),
					        'logoutRedirect' => array('controller' => 'posts', 'action' => 'timeline'),
					        'authError' => 'You must be logged in to view this page.',
					        'loginError' => 'Invalid Username or Password entered, please try again.'
	    	),
			'Cookie');
	public $helpers = array('Html', 'Form');
	public $uses = array('Post', 'SiteVariable', 'MenuItem');
	
	public function beforeFilter(){
	
	}
	
	public function beforeRender(){
		
		
		$posts = $this->Post->find('all', array('limit' => 3));
		$this->set('latestPosts', $posts);
		
		$siteVariables = $this->SiteVariable->find('first');
// 		$variables = $siteVariables['SiteVariable']; 
		$this->set(compact('variables'));
		
		$menuItems = $this->MenuItem->find('all', array('conditions' => array('MenuItem.show' => 1)));
		$this->set(compact('menuItems'));
		
		$is_logged = FALSE;
		if($this->Auth->loggedIn()) $is_logged = TRUE;
		
		$this->set(compact('is_logged'));
	}
	
	public function crypto_rand_secure($min = 0, $max = 26) {
		$range = $max - $min;
		if ($range < 0) return $min; // not so random...
		$log = log($range, 2);
		$bytes = (int) ($log / 8) + 1; // length in bytes
		$bits = (int) $log + 1; // length in bits
		$filter = (int) (1 << $bits) - 1; // set all lower bits to 1
		do {
			$rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
			$rnd = $rnd & $filter; // discard irrelevant bits
		} while ($rnd >= $range);
		return $min + $rnd;
	}
	
	public function getToken($length  = 15){
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet.= "0123456789";
		for($i=0;$i<$length;$i++){
			$token .= $codeAlphabet[$this->crypto_rand_secure(0,strlen($codeAlphabet))];
		}
		return $token;
	}
	
	public function generateUniqueID(){
		//You may wish to change this
		// 		return base64_encode(uniqid() . substr(uniqid(), 11, 2));	// e.g. NGYcZDRjODcxYzFkY2Rk (seems popular format)
		// 		return uniqid();					// e.g. 4f3d4c8602346
		return str_replace('.', '', uniqid('', true));		// e.g. 4f3d4c860235a529118898
		// 		return str_replace('-', '', String::uuid());		// e.g. 4f3d4c80cb204b6a8e580a006f97281a
	}
}
