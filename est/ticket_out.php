<?php
session_start();
session_destroy();
header("Location:ticket.php");