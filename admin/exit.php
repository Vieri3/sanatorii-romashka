<?php
setcookie('name', '', time() - 60, "/"); 
header('Location: /');