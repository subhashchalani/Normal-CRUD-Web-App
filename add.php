<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CyberElysium Internship CRUD Sample | Add New Data</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/FORM.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="getintouch">
        <div class="container modern-form">
            <div class="text-center">
                <h4 style="color: #212529;font-size: 45px;">Add New Employee</h4>
            </div>
            <hr class="modern-form__hr">
            <div class="modern-form__form-container">
                <form action="adding.php" method="post">
                    <div class="row">
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-r form-group mb-3"><input name="fullName" class="form-control input input-tr" type="text" placeholder="Full Name">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-l form-group mb-3"><input name="email" class="form-control input input-tr" type="text" placeholder="Email">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="modern-form__form-group--padding-t form-group mb-3"><input name="role" class="form-control input input-tr" type="text" placeholder="Role" style="text-align: center;">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Add Now</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>