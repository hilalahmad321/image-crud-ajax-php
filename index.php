<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
.mycon {
    position: relative;
}

.hide {
    position: absolute;
    right: 10px;
    display: none;
}

.show1 {
    position: absolute;
    right: 10px;
    display: block;
    z-index: 10000;
}
</style>

<body>

    <div class="container mt-2 mycon">
        <div class="alert alert-danger alert-dismissible fade show hide" id="alert">
            <button type="button" class="btn-primary btn" id="close">
                <span>&times;</span>
            </button>
            <strong id="error" class="ml-3"></strong>
        </div>
        <div class="alert alert-success alert-dismissible fade show hide" id="alertsuccess">
            <button type="button" class="btn-primary btn" id="close1">
                <span>&times;</span>
            </button>
            <strong id="success" class="ml-3"></strong>
        </div>
        <div class="text-white bg-primary p-5 text-center">
            <h1 class="">Image Crud in ajax and PHP</h1>
            <h4 class="text-danger">Powerd By Hilal Ahmad </h4>
        </div>

    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class=" float-left float-clear">Students ( 0 )</h5>
                <!-- Button trigger modal -->
                <button type='button' class='btn btn-primary float-right' data-toggle='modal' data-target='#modelId1'>
                    Add Student
                </button>
            </div>
        </div>
        <div class='table-responsive mt-5'>
            <div id="load-data"></div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" id="submit-data">

                        <div class="form-group">
                            <label for="">Enter your Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            <small id="helpId1" class="" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Enter your Age</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                            <small id="helpId2" class="" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Enter your Image</label> <br>
                            <img id="blash" style="width:100px;height: 100px; display: none;" alt="">
                            <input type="file" name="image" id="image" class="form-control" placeholder="Image">
                            <small id="helpId3" class="" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="submit-update-data">
                        <div id="load-update-data"></div>
                        <div class='form-group'>
                            <button type='submit' name='update' class='btn btn-primary'>Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/action.js"></script>

    <!-- Optional JavaScript -->
</body>

</html>