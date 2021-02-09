<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Add Questions</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/mainTeacher.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Add Questions for the Quiz</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="addQuizCore.php">


                    <div class="form-row">
                            <div class="name">Question</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="question">
                                </div>
                            </div>
                        </div>

                    
                        
                        <div class="form-row">
                            <div class="name">Option 1</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="option1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Option 2</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="option2">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Option 3</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="option3">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Option 4</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="option4">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Correct Answer</div>
                            <div class="value">
                                <div class="row row-refine">
                                   
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="correctans">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                       
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
