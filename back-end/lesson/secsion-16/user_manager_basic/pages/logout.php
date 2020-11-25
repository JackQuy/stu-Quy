

<?php

unset($_SESSION['is_login']);
unset($_SESSION['username']);
header('Location: ?page=login');

