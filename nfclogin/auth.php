<?php
require_once($CFG->libdir.'/authlib.php');

class auth_plugin_nfclogin extends auth_plugin_base { 
	
    $usr;
    $usrname;
    $pwd;
    $id;

    /**
     * Constructor.
     */

    /* /*\ ROMAIN => C'EST EN PUTAIN DE CHANTIER BORDEL DE MERDE  /*\ */
    function auth_plugin_nfclogin() {
        $this->authtype = 'nfc';
        $this->config = get_config('auth/nfclogin');

	$this->usr = $DB->get_record('user', array('nfc'=>$this->id)); 
	$this->usrname = $this->usr->username;
	$this->pwd = $this->usr->password;
	
    }

   function user_login($this->usrname, $this->pwd) {
        if (!validate_internal_user_password($this->usrname, $this->pwd)) {
            return false;
        }

        return true;
    }


?>
