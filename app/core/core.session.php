<?php
/**
 * Description of session
 *
 * @author foospidy
 */
class session {
	/// variables
	// none i guess

	/// methods
	function initialize_session_variables() {
		$this->set_user_id();
	}

	function set_user_id($user_id=0) {
		$_SESSION['user_id'] = $user_id;
	}

	function get_user_id() {
		return $_SESSION['user_id'];
	}

	function set_value($key, $value='') {
		$_SESSION[value]->$key = $value;
	}

	function get_value($key) {
		return $_SESSION[value]->$key;
	}

	function get_session_id() {
		return session_id();
	}

	function reset() {
		$this->set_user_id();
		$_SESSION[value] = NULL;
		session_regenerate_id(true);
	}

    function is_valid_session() {
        if(!$this->get_user_id()) {
            return false;
        } else {
            return true;
        }
    }

	/// constructor
	function session() {
		if('' === session_id()) {
			session_start();
		}

		if(!isset($_SESSION['user_id'])) {
			$this->initialize_session_variables();
		}
	}
}
?>
