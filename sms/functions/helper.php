<?php
function is_user_logged_in(): bool {
    return isset($_SESSION['username']);
}

function is_admin(): bool {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}