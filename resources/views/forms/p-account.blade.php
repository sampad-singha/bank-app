<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Open Account: Individual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Open+Sans:wght@300;400&family=Poppins:wght@200;300;400;600;700;800;900&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
    @include('layouts.navbar')
    <div class="p-acc-head">
        <h3>Personal Account Opening Form</h3>
        <p><em>Note:</em> You have to go to the nearest MAZE Bank branch with the form in order to complete your account
            opening process.</p>
    </div>
    <div class="p-acc-div">
        <form action="{{route('p-account-store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="acc-name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input id="account_holder_name" name="account_holder_name" type="text" aria-describedby="acc-nameHelpBlock"
                        required="required" class="form-control">
                    <span id="acc-nameHelpBlock" class="form-text text-muted">Block Letters</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Account Type</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="account_type" id="acc-type_0" type="radio" required="required"
                            class="custom-control-input" value="Checking">
                        <label for="acc-type_0" class="custom-control-label">Checking</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="account_type" id="acc-type_1" type="radio" required="required"
                            class="custom-control-input" value="Saving">
                        <label for="acc-type_1" class="custom-control-label">Saving</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="account_type" id="acc-type_2" type="radio" required="required"
                            class="custom-control-input" value="Fixed Deposit">
                        <label for="acc-type_2" class="custom-control-label">Fixed Deposit</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Currency</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="currency" id="currency_0" type="radio" required="required"
                            class="custom-control-input" value="bdt">
                        <label for="currency_0" class="custom-control-label">BDT</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="currency" id="currency_1" type="radio" required="required"
                            class="custom-control-input" value="usd">
                        <label for="currency_1" class="custom-control-label">USD</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Account Holder</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="account_holder" id="holder-type_0" type="radio" required="required"
                            class="custom-control-input" value="1">
                        <label for="holder-type_0" class="custom-control-label">Individual</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="account_holder" id="holder-type_1" type="radio" required="required"
                            class="custom-control-input" value="2">
                        <label for="holder-type_1" class="custom-control-label">Joint</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="primary-deposit" class="col-4 col-form-label">Primary Deposit</label>
                <div class="col-8">
                    <input id="primary-deposit" name="primary_deposit" type="number" min="500" required="required"
                        class="form-control">
                    <span id="primary-depositHelpBlock" class="form-text text-muted">minimum BDT 500</span>
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="holder-name" class="col-4 col-form-label">Account Holder Name</label>
                <div class="col-8">
                    <input id="holder-name" name="holder-name" type="text" aria-describedby="f-nameHelpBlock" required="required"
                        class="form-control">
                    <span id="f-nameHelpBlock" class="form-text text-muted">Block Letters</span>
                </div>
            </div> --}}
            <div class="form-group row">
                <label for="dob" class="col-4 col-form-label">Date of Birth</label>
                <div class="col-8">
                    <input id="dob" name="dob" type="date" required="required" class="form-control dateselect">
                </div>
            </div>
            <div class="form-group row">
                <label for="father-name" class="col-4 col-form-label">Father's Name</label>
                <div class="col-8">
                    <input id="father-name" name="father_name" type="text" aria-describedby="father-nameHelpBlock"
                        required="required" class="form-control">
                    <span id="father-nameHelpBlock" class="form-text text-muted">Block Letters</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="mother-name" class="col-4 col-form-label">Mother's Name</label>
                <div class="col-8">
                    <input id="mother-name" name="mother_name" type="text" aria-describedby="mother-nameHelpBlock"
                        required="required" class="form-control">
                    <span id="mother-nameHelpBlock" class="form-text text-muted">Block Letters</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="spouse-name" class="col-4 col-form-label">Spouse Name</label>
                <div class="col-8">
                    <input id="spouse-name" name="spouse_name" type="text" aria-describedby="spouse-nameHelpBlock"
                        class="form-control">
                    <span id="spouse-nameHelpBlock" class="form-text text-muted">Block Letters</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="nationality" class="col-4 col-form-label">Nationality</label>
                <div class="col-8">
                    <input id="nationality" name="nationality" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">gender</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input"
                            value="Male">
                        <label for="gender_0" class="custom-control-label">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input"
                            value="F">
                        <label for="gender_1" class="custom-control-label">Female</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_2" type="radio" required="required" class="custom-control-input"
                            value="O">
                        <label for="gender_2" class="custom-control-label">Others</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="occupation" class="col-4 col-form-label">Occupation</label>
                <div class="col-8">
                    <input id="occupation" name="occupation" type="text" aria-describedby="occupationHelpBlock"
                        required="required" class="form-control">
                    <span id="occupationHelpBlock" class="form-text text-muted">Write NONE if you are unemployed</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="income" class="col-4 col-form-label">Monthly Income</label>
                <div class="col-8">
                    <input id="income" name="income" type="number" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="income-source" class="col-4 col-form-label">Source of Income</label>
                <div class="col-8">
                    <input id="income-source" name="income_source" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tin" class="col-4 col-form-label">TIN No</label>
                <div class="col-8">
                    <input id="tin" name="tin" type="text" minlength="12" maxlength="12" aria-describedby="tinHelpBlock" class="form-control">
                    <span id="tinHelpBlock" class="form-text text-muted">Keep the field blank if you don't have TIN
                        account</span>
                </div>
            </div>
            <p class="sp">Present Address</p>
            <div class="form-group row">
                <label for="division" class="col-4 col-form-label">Division</label>
                <div class="col-8">
                    <input id="division" name="division" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="district" class="col-4 col-form-label">District</label>
                <div class="col-8">
                    <input id="district" name="district" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="post" class="col-4 col-form-label">Post Code</label>
                <div class="col-8">
                    <input id="post" name="post_code" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="thana" class="col-4 col-form-label">Thana</label>
                <div class="col-8">
                    <input id="thana" name="thana" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="house-road" class="col-4 col-form-label">House/Road</label>
                <div class="col-8">
                    <input id="house-road" name="house_road" type="text" required="required" class="form-control">
                </div>
            </div>
            <p class="sp">Permanent Address</p>
            <div class="form-group row">
                <label for="p-division" class="col-4 col-form-label">Division</label>
                <div class="col-8">
                    <input id="p-division" name="p_division" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="p-district" class="col-4 col-form-label">District</label>
                <div class="col-8">
                    <input id="p-district" name="p_district" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="p-post" class="col-4 col-form-label">Post Code</label>
                <div class="col-8">
                    <input id="p-post" name="p_post_code" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="p-thana" class="col-4 col-form-label">Thana</label>
                <div class="col-8">
                    <input id="p-thana" name="p_thana" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="p-house-road" class="col-4 col-form-label">House/Road</label>
                <div class="col-8">
                    <input id="p-house-road" name="p_house_road" type="text" required="required" class="form-control">
                </div>
            </div>
            <br><br>
            <div class="form-group row">
                <label for="mobile" class="col-4 col-form-label">Mobile No</label>
                <div class="col-8">
                    <input id="mobile" name="mobile" type="tel" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="mail" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="mail" name="email" type="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nid" class="col-4 col-form-label">National ID</label>
                <div class="col-8">
                    <input id="nid" name="nid" type="text" minlength="10" maxlength="10" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="passport" class="col-4 col-form-label">Passport</label>
                <div class="col-8">
                    <input id="passport" name="passport" type="text" minlength="9" maxlength="9" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="ref-name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input id="ref-name" name="ref_name" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="ref-acc" class="col-4 col-form-label">Account No</label>
                <div class="col-8">
                    <input id="ref-acc" name="ref_account_no" type="text" minlength="10" maxlength="10"  class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="img" class="col-4 col-form-label">Upload Image</label>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile" name="image" accept=".jpg , .png , .jpeg">
                        <span id="" class="form-text text-muted">Supported Types: .png .jpg .jpeg (max size-2MB)</span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4"></label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="acknowledgement" id="acknowledgement_0" type="checkbox"
                            class="custom-control-input" value="1" required="required">
                        <label for="acknowledgement_0" class="custom-control-label">I hereby confirm that all the above
                            information is correct</label>
                    </div>
                </div>
            </div>
            <div class="form-group row submit">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    @include('layouts.footer')


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
