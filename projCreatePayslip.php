<?php
include_once "indexHeader.php";
?>

<h1>Enter your shifts</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Rates</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- Left Panel -->
        <div class="col-md-4 col-lg-3 border-end">

            <div class="p-4">

                <h5 class="mb-4">Fixed</h5>

                <div class="mb-3 row align-items-center">
                    <label class="col-4 col-form-label">Rate</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <div class="mb-3 row align-items-center">
                    <label class="col-4 col-form-label">L_Allow</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <div class="mb-3 row align-items-center">
                    <label class="col-4 col-form-label">U_Allow</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <div class="mb-3 row align-items-center">
                    <label class="col-4 col-form-label">Fringe</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <div class="mb-3 row align-items-center">
                    <label class="col-4 col-form-label">Tax</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <div class="mb-3 row align-items-center">
                    <label class="col-4 col-form-label">Deduct</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <div class="mb-4 row align-items-center">
                    <label class="col-4 col-form-label">Insurance</label>
                    <div class="col-8">
                        <input type="number"
                               class="form-control"
                               min="0"
                               max="9999.99"
                               step="0.01">
                    </div>
                </div>

                <button class="btn btn-primary w-100">
                    Update
                </button>

            </div>

        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
include_once "indexFooter.php";
?>