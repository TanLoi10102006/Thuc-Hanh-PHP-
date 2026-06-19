<?php
session_start();
session_unset();   // Xoá toàn bộ biến session
session_destroy(); // Huỷ session
header("Location: login.php");
exit();
