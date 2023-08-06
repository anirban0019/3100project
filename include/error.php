<?php
if (isset($_GET['error'])) {
    $msg = $_GET['error'];
    echo '<div id="alert-message" class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
?>
<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>