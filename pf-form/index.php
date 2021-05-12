<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://localhost/pf-form/css/smart_wizard_dots.css">
</head>
<body>
    
<div class="container">

    <div class="row mt-2">

    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Step</h5>
            <div class="card-body">
                <div id="smartwizard">

            <ul class="nav">
                <li class="nav-item">
                <a class="nav-link" href="#step-1">
                    Passport/ID
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#step-2">
                    Personal Information
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#step-3">
                    BSC Address
                </a>
                </li>
            </ul>

            <!-- Tab Content Start -->

            <form method="POST" action="register_process.php" id="pf-form" enctype="multipart/form-data">
            <div class="tab-content">
                <div id="step-1" class="tab-pane active" role="tabpanel" aria-labelledby="step-1">

                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="doc_type" value="passport" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Passport</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="doc_type" value="ID" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">National ID</label>
                    </div>  
                </div>

                
                <div class="form-group">
                    <label for="">Upload your Passport/ID</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="doc_name" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <span id="error_file" class="text-danger"></span>
                    </div>
                </div>
                </div>

                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">

                    <div class="form-row">

                        <div class="form-group col-md-4">
                        <label class="form-check-label" for="">
                                Gender
                            </label>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                            <label class="form-check-label" for="exampleRadios2">
                                Female
                            </label>
                            </div>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="inputEmail4">Fullname</label>
                            <input type="text" name="fullname" class="form-control" id="fullname">
                        </div>

                    </div>     

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Full Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
                    </div>
                
                    <div class="form-row">

                        <div class="form-group col-md-4">
                        <label for="inputCountry">Country</label>
                        <select name="country" id="inputCountry" class="form-control">
                            <option selected>Choose Country</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="United States">United States</option>
                        </select>
                        </div>

                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select name="state" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="California">California</option>
                        </select>
                        </div>

                        <div class="form-group col-md-4">
                        <label for="inputCity">City</label>
                        <select name="city" id="inputCity" class="form-control">
                            <option selected>Choose...</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Los Angeles">Los Angeles</option>
                        </select>
                        </div>

                    </div>
                </div>

                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="inputPassword4">BSC Address</label>
                        <input type="bsc_address" class="form-control" name="bsc_address" id="bsc_address">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
            </form>
            <!-- End of tab-content -->

        </div>
            </div>
        </div>
    </div>

        

    </div>

</div>

</body>


<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="http://localhost/pf-form/js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('#smartwizard').smartWizard({
        selected: '0',
        theme: 'dots',
  });


    $('#smartwizard').smartWizard("goToStep", 0);

    $('#sw-btn-next')

});
</script>
</html>