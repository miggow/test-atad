<?php
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-success">
        <strong>Success!</strong>' . $_SESSION['message'] .
    '</div>';
    unset($_SESSION['message']);
}

if (isset($_SESSION['error_message'])) {
    echo '<div class="alert alert-danger">
        <strong>danger!</strong> ' . $_SESSION['error_message'] .
    '</div>';
    unset($_SESSION['error_message']);
}
?>
