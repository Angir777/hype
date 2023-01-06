<?php

/**
* @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
*/

class Registration extends db {

  	/**
	 * GetForm
	 * 
  	 * @param mixed $l
  	 */
  	public function getForm($l){

  		$result = '
			<form action="'.URL.'registration" method="POST" class="form-horizontal" autocomplete="off">
              	<div class="form-group">
                  	<label class="col-md-12 control-label" for="l_name">'.$l['c_2'].'*</label>
                  	<div id="name-group" class="col-md-12">
                    	<input type="text" class="form-control" name="l_name" placeholder="'.$l['c_2'].'" minlength="5" required>
                  	</div>
              	</div>
              	<div class="form-group">
                  	<label class="col-md-12 control-label" for="l_password">'.$l['c_3'].'*</label>
                  	<div id="email-group" class="col-md-12">
                    	<input type="password" class="form-control" name="l_password" placeholder="'.$l['c_3'].'" minlength="5" required>
                  	</div>
              	</div>
				<div class="form-group">
				  	<label class="col-md-12 control-label" for="l_password_confirmation">'.$l['c_4'].'*</label>
				  	<div id="email-group" class="col-md-12">
						<input type="password" class="form-control" name="l_password_confirmation" placeholder="'.$l['c_4'].'" minlength="5" required>
				  	</div>
			  	</div>
				<div class="form-group">
					<label class="col-md-12 control-label" for="l_email">'.$l['c_5'].'*</label>
				  	<div id="email-group" class="col-md-12">
						<input type="email" class="form-control" name="l_email" placeholder="'.$l['c_5'].'" required>
				  	</div>
			  	</div>
              	<div class="form-group">
                	<div class="col-md-12 text-right mt20">
                  	<button type="submit" class="btn btn-primary btn-md">'.$l['c_1'].'</button>
                	</div>
              	</div>
            </form>
		';

		return $result;
		
  	}

  	/**
	 * GetRegistration
	 * 
  	 * @param mixed $registrationName
  	 * @param mixed $registrationPassword
  	 * @param mixed $registrationPasswordConfirmation
  	 * @param mixed $registrationEmail
  	 */
  	public function getRegistration($registrationName, $registrationPassword, $registrationPasswordConfirmation, $registrationEmail) {

		// c_6 - There is already a user with the given username
		try {
            $sql = "SELECT * FROM ".DB_PREFIX."_users WHERE user_login = :user_login";
			$statement = $this->connect()->prepare($sql);
			$statement->bindParam(':user_login', $registrationName, PDO::PARAM_STR);
			$statement->execute();
			$checkUsernameCount = $statement->rowCount();
        } catch (Exception $e) {
			return 'c_12';
		}
		if ($checkUsernameCount > 0) { return 'c_6'; }

		// c_7 - There is already a user with the given email address
		try {
            $sql = "SELECT * FROM ".DB_PREFIX."_users WHERE user_email = :user_email";
			$statement = $this->connect()->prepare($sql);
			$statement->bindParam(':user_email', $registrationEmail, PDO::PARAM_STR);
			$statement->execute();
			$checkUserEmailcount = $statement->rowCount();
        } catch (Exception $e) {
			return 'c_12';
		}
		if ($checkUserEmailcount > 0) { return 'c_7'; }

		// c_8 - The passwords are not identical
		if ($registrationPassword != $registrationPasswordConfirmation) { return 'c_8'; }

		// c_9 - Invalid email address format
		if (!filter_var($registrationEmail, FILTER_VALIDATE_EMAIL)) { return 'c_9'; }

		// c_10 - Username must be at least 5 characters long
		if (strlen($registrationName) < 5) { return 'c_10'; }

		// c_11 - The password must be at least 5 characters long
		if (strlen($registrationPassword) < 5 || strlen($registrationPasswordConfirmation) < 5) { return 'c_11'; }

		// add new user
		$data = [
			'user_login' => $registrationName,
			'user_password' => $this->encryptMethod($registrationPassword, $registrationEmail),
			'user_email' => $registrationEmail,
		];
		$sql = "INSERT INTO ".DB_PREFIX."_users (user_login, user_password, user_email) VALUES (:user_login, :user_password, :user_email)";
		$statement = $this->connect()->prepare($sql);
		$statement->bindParam(':user_login', $login, PDO::PARAM_STR);
		$statement->bindParam(':user_password', $login, PDO::PARAM_STR);
		$statement->bindParam(':user_email', $login, PDO::PARAM_STR);
		$statement->execute($data);

		return null;

  	}

}