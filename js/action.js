$(document).ready(function () {


    $("#close").click(function () {
        $("#alert").addClass("hide");
        $("#alert").removeClass("show1");
    })
    $("#close1").click(function () {
        $("#alertsuccess").addClass("hide");
        $("#alertsuccess").removeClass("show1");
    })
    // save data into database
    $("#submit-data").submit(function (e) {
        e.preventDefault();
        // variables
        var name = $("#name").val();
        var age = $("#age").val();
        var img = $("#image").val();

        // form data
        var formdata = new FormData(this);

        // check condition
        if (name == "" || age == "" || img == "") {
            $("#error").text("Please Fill All Flied");
            $("#alert").addClass("show1");
            $("#alert").removeClass("hide");

        } else {
            $.ajax({
                type: "POST",
                url: "add-student.php",
                data: formdata,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == 1) {
                        $("#error").text("File size not increase 2 MB");
                        $("#alert").addClass("show1");
                        $("#alert").removeClass("hide");
                    } else if (data == 2) {
                        $("#error").text("Please Enter valid extention jpg , png , jpeg");
                        $("#alert").addClass("show1");
                        $("#alert").removeClass("hide");
                    } else if (data == 3) {
                        fetchData();
                        $("#success").text("Data Add Successfully");
                        $("#alertsuccess").addClass("show1");
                        $("#alertsuccess").removeClass("hide");
                        $("form").trigger("reset");
                        $("#modelId1").modal("hide");
                    } else {
                        $("#error").text("Something woring");
                        $("#alert").addClass("show1");
                        $("#alert").removeClass("hide");
                    }
                }
            });
        }
    });


    // Fetch data from database
    const fetchData = () => {
        $.ajax({
            type: "POST",
            url: "fetch-data.php",
            success: function (data) {
                // console.log(data);
                $("#load-data").html(data);
            }
        });
    }

    // load Function
    fetchData();


    $(document).on("click", "#update-data", function (e) {
        var id = $(this).data("id");
        if (id == "") {
            alert('id is required');
        } else {
            $.ajax({
                type: "POST",
                url: "edit-data.php",
                data: {
                    // es6 says if value and key are same just enter one
                    id
                },
                success: function (data) {
                    $("#load-update-data").html(data);
                }
            });
        }
    });


    $("#submit-update-data").submit(function (e) {
        e.preventDefault();

        // variables
        var id = $("#edit_id").val();
        var name = $("#edit_name").val();
        var age = $("#edit_age").val();
        // var img = $("#new_image").val();

        // form data
        var formdata = new FormData(this);
        // check condition
        if (name == "" || age == "") {
            $("#error").text("Please Fill All Flied");
            $("#alert").addClass("show1");
            $("#alert").removeClass("hide");

        } else {
            $.ajax({
                type: "POST",
                url: "save-update-data.php",
                data: formdata,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data == 1) {
                        $("#error").text("File size not increase 2 MB");
                        $("#alert").addClass("show1");
                        $("#alert").removeClass("hide");
                    } else if (data == 2) {
                        $("#error").text("Please Enter valid extention jpg , png , jpeg");
                        $("#alert").addClass("show1");
                        $("#alert").removeClass("hide");
                    } else if (data == 3) {
                        fetchData();
                        $("#success").text("Data Update Successfully");
                        $("#alertsuccess").addClass("show1");
                        $("#alertsuccess").removeClass("hide");
                        $("form").trigger("reset");
                        $("#modelId2").modal("hide");
                    } else {
                        $("#error").text("Something woring");
                        $("#alert").addClass("show1");
                        $("#alert").removeClass("hide");
                    }
                }
            });
        }
    });

    $(document).one("click", "#delete-data", function (e) {
        e.preventDefault();
        var id = $(this).data("id");

        if (id == "") {
            alert("id is required ");
        } else {
            $.ajax({
                type: "POST",
                url: "delete-data.php",
                data: {
                    id
                },
                success: function (data) {
                    alert("delete successfully");
                }
            });
        }
    });

    $(".alert").alert();

});