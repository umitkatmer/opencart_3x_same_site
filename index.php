
<?php

// buradaki php dosyasını bulup açın
//catalog/controller/startup/session.php 

setcookie($this->config->get('session_name'), $this->session->getId(), ini_get('session.cookie_lifetime'), ini_get('session.cookie_path'), ini_get('session.cookie_domain'));

//yukarıdaki kodu aşağıdaki kod ile değiştirin

setcookie($this->config->get('session_name'), $this->session->getId(), ['expires' => ini_get('session.cookie_lifetime'), 'path' => ini_get('session.cookie_path'), 'domain' => ini_get('session.cookie_domain'), 'samesite' => 'None', 'secure' => true, 'httponly' => true]);

// buradaki php dosyasını bulup açın
//system/framework.php 

setcookie($config->get('session_name'), $session->getId(), ini_get('session.cookie_lifetime'), ini_get('session.cookie_path'), ini_get('session.cookie_domain'));

//yukarıdaki kodu aşağıdaki kod ile değiştirin

setcookie($config->get('session_name'), $session->getId(), ['expires' => ini_get('session.cookie_lifetime'), 'path' => ini_get('session.cookie_path'), 'domain' => ini_get('session.cookie_domain'), 'samesite' => 'None', 'secure' => true, 'httponly' => true]);

?>