<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- check Box -->
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="checkbox" value="yes" id="phpMailerCheck"
                            onchange="phpMailerToggle(event)">
                        <label class="form-check-label" for="phpMailerCheck">
                            Use PHPMailer
                        </label>
                    </div>

                    <!-- Display Panel -->
                    <div class="p-3 border" id="phpMailerTogglePanel">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="index.js"></script>
</body>

</html>