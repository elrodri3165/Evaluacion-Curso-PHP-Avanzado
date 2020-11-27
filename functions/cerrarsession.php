<?php
session_start();
session_unset();
session_destroy();
header ('Location: ../unidad7.php');
