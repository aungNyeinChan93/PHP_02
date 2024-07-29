<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row my-4 mx-auto ">
            <div class="col-12">
                <form action="index.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                        <input name="file" type="file" class="form-control" id="inputGroupFile01">
                        <button class="btn btn-outline-secondary" type="submit" id="inputGroupFile01">Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>