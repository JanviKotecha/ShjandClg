<?php
$file = $_GET['file'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: 'Your pplication has been successfully submitted. Thank You !!',
                icon: 'success',
                confirmButtonText: 'OK',
                // When the "OK" button is clicked
                willClose: () => {
                    window.location.href = 'images/admissionPdfs/<?php echo $file; ?>';
                }
            });
        });
    </script>
</head>
<body>
</body>
</html>
