<?php

/**
* @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
*/

class Login extends db {

  	/**
	 * GetForm
	 * 
  	 * @param mixed $l
  	 */
  	public function getForm($l){

  		$result = '
			<form action="'.URL.'login" method="POST" class="form-horizontal" autocomplete="off">
              	<div class="form-group">
                  	<label class="col-md-12 control-label" for="l_name">'.$l['c_2'].'*</label>
                  	<div id="name-group" class="col-md-12">
                    	<input type="text" class="form-control" name="l_name" placeholder="'.$l['c_2'].'" required>
                  	</div>
              	</div>
              	<div class="form-group">
                  	<label class="col-md-12 control-label" for="l_password">'.$l['c_3'].'*</label>
                  	<div id="email-group" class="col-md-12">
                    	<input type="password" class="form-control" name="l_password" placeholder="'.$l['c_3'].'" required>
                  	</div>
              	</div>
              	<div class="form-group">
                	<div class="col-md-12 text-right mt20">
                  	<button type="submit" class="btn btn-primary btn-md">'.$l['c_4'].'</button>
                	</div>
              	</div>
            </form>
		';

		return $result;
		
  	}

  	/**
	 * GetLogin
	 * 
  	 * @param mixed $login
  	 * @param mixed $password
  	 */
  	public function getLogin($login, $password) {

		// Select form DB
		try {
            $sql = "SELECT * FROM ".DB_PREFIX."_users WHERE user_login = :user_login";
			$statement = $this->connect()->prepare($sql);
			$statement->bindParam(':user_login', $login, PDO::PARAM_STR);
			$statement->execute();
			$answer = $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
			return 'c_6';
		}

	    if (!empty($answer)) {

			foreach ($answer as $data) {
				
				$passwordDB = $this->decryptMethod($data['user_password'], $data['user_email']);

				if ($password == $passwordDB) {

				  	$_SESSION['user']['logged'] = true;
					$_SESSION['user']['user_login'] = $data['user_login'];
					$_SESSION['user']['user_email'] = $data['user_email'];

					return null;

				} else {

					return 'c_5';

			 	}
			}

		} else {

			return 'c_6';

		}

  	}

}