<?php
include "./conn.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$record_add_error = ''; // Initialize the success message variable


// Check if the messages are passed as query parameters

if (isset($_GET['record_add_error'])) {
    // Set the success message
    $record_add_error = '<div class="alert alert-success  alert-dismissible fade show" role="alert">
            <strong></strong> ' . $_GET['record_add_error'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

    // Mark the message as shown
    $_SESSION['log_in_success_shown'] = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masg Box Disapper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #c0eb75;
        }

        .bg_but_colo {
            background-color: #c0eb75;
        }

        .bg_box_color {
            background-color: #c3fae8;
        }

        .full-height {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center full-height">
        <div class="col-4">
            <div class="d-flex justify-content-center">
                <div class="">
                    <?php echo $record_add_error; ?>
                </div>
                <h4>This Code For $_GET['_SESSION']</h4>
                <br>
                <br>
                <h6> <a href="./msg box.html">Live Preview</a></h6>
            </div>
        </div>
    </div>
    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        window.onload = function() {
            const alert = document.getElementById('alert');
            if (alert) {
                setTimeout(() => {
                    var alertInstance = new bootstrap.Alert(alert);
                    alertInstance.close();
                }, 2000); // 2000 milliseconds = 2 seconds
            }
        };
    </script>
</body>

</html>