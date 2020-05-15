<?php
@session_start();

function formatXML($xml) {
    $dom = new DOMDocument("1.0", "UTF-8");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml);
    return trim($dom->saveXML());
}
function is_multidimensional(array $array) {
    return count($array) !== count($array, COUNT_RECURSIVE);
}
function removeFromArray($array, $to_remove) {
    $result = array_merge(array_diff_key($array, array_flip($to_remove)));

	return $result;
}
function encriptar($value, $passphrase = "") {
    $salt = openssl_random_pseudo_bytes(8);
    $salted = '';
    $dx = '';
    while (strlen($salted) < 48) {
        $dx = md5($dx . $passphrase . $salt, true);
        $salted .= $dx;
    }
    $key = substr($salted, 0, 32);
    $iv = substr($salted, 32, 16);
    $encrypted_data = openssl_encrypt(json_encode($value), "aes-256-cbc", $key, true, $iv);
    $data = array("ct" => base64_encode($encrypted_data), "iv" => bin2hex($iv), "s" => bin2hex($salt));

    return htmlspecialchars(json_encode($data));
}
function decriptar($jsonString, $passphrase = "") {
    $jsondata = json_decode($jsonString, true);
    $salt = hex2bin($jsondata["s"]);
    $ct = base64_decode($jsondata["ct"]);
    $iv = hex2bin($jsondata["iv"]);
    $concatedPassphrase = $passphrase . $salt;
    $md5 = array();
    $md5[0] = md5($concatedPassphrase, true);
    $result = $md5[0];
    for ($i = 1; $i < 3; $i++) {
        $md5[$i] = md5($md5[$i - 1] . $concatedPassphrase, true);
        $result .= $md5[$i];
    }
    $key = substr($result, 0, 32);
    $data = openssl_decrypt($ct, "aes-256-cbc", $key, true, $iv);

    return json_decode($data, true);
}
function dd($variable) {
    echo "<pre>";
    print_r($variable);
}
// ///SE USA PARA CONCATERNAR
function lreplace($search, $replace, $subject) {
    $pos = strrpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}
function findString($text, $word) {
    if (preg_match('*\b' . preg_quote($word) . '\b*i', $text, $matches, PREG_OFFSET_CAPTURE)) {
        return $matches[0][1];
    }
    return -1;
}
function redirect($url) {
    echo "<script type='text/javascript'>
	window.location.href='$url';</script>";
}
function sessionLife() {
    $inactivo = 3.154e+10;

    if (isset($_SESSION["time"])) {
        $session_life = time() - $_SESSION["time"];
        if ($session_life > $inactivo) {
            session_unset();
            session_destroy();
        }
    }
    $_SESSION["time"] = time();
}
function cookieLife() {

    setcookie("GameJD" //Nombre de la cookie
    ,session_id()	// valor de la cookie
    ,time() + 60*60*24*30	// válida por 30 días
    ,'/'			// la cookie estará disponible en
            //	la totalidad del dominio
    ,$_SERVER['HTTP_HOST'] // nombre del dominio
    ,FALSE 		// FALSE = HTTP, TRUE = HTTPS
    ,TRUE 		// OnlyHttp = HTTP, NO JavaScript
  );
}

