<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- bootstrap5 CDN Link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- inlcude css file -->
    <link rel="stylesheet" href="style/style.css">

    <!-- inlcude font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>To DO Task Web App</title>
</head>

<body>
    <div class="container-fluid border-bottom">
        <div class="row">
            <div class="col-lg-10 col-md-6 col-sm">
                <h1>To-Do App</h1>
            </div>
            <div class="col-lg-2 col-md-6 col-sm p-3 clearfix">
                <button class="btn btn-outline-warning float-end" data-bs-toggle="modal" data-bs-target="#addtask">Add
                    Task</button>
            </div>
        </div>
    </div>



    <div class="container mt-3">

        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                <div class="card">
                    <div class="d-flex justify-content-end border-bottom p-1 border-primary">
                        <span class='icon'>
                            <i class="fa fa-check"></i>

                        </span>
                        <span class='icon'>
                            <i class="fa fa-edit "></i>

                        </span>
                        <span class='icon me-3'>
                            <i class="fa fa-trash "></i>

                        </span>

                    </div>
                    <div class="card-body">
                        <p style="text-align:justify;" contenteditable="false">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Velit, voluptatem?</p>
                    </div>
                </div>
            </div>




        </div>
    </div>

















    <!-- task add modal box -->

    <div class="modal fade" id="addtask">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h2 class="text-warning">Add Your New Work</h2>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="task" id="task" class="form-control" placeholder="Add Work...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-secondary">Add</button>
                </div>
            </div>
        </div>
    </div>




</body>

</html>