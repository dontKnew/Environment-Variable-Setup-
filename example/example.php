<?php

 require_once '../env/ParseEnvClass.php';
 $env = new DotEnv('./.env');
 $env->load();
 echo getenv("APP_ENV");

?>