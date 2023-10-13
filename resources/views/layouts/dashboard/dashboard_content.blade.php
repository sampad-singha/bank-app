<div class="content Dashboard">
    <div class="container">
        <div class="info_table">
            <h4>Account Information</h4>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Email</h6>
                </div>
                <div class="col">
                    <p>{{$ac->email}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Account No</h6>
                </div>
                <div class="col">
                    <p><strong>{{$ac->account_no}}</strong></p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Account Type</h6>
                </div>
                <div class="col">
                    <p>{{$ac->account_type}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Branch</h6>
                </div>
                <div class="col">
                    <p>{{$ac->branch_name}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Balance</h6>
                </div>
                <div class="col">
                    <p class="ac_balance">{{$ac->balance}} ৳</p>
                </div>
            </div>
        </div>
        <div class="info_table">
            <h4>Contact Information</h4>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Mobile No</h6>
                </div>
                <div class="col">
                    <p>{{$ac->mobile}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Email</h6>
                </div>
                <div class="col">
                    <p><strong>{{$ac->email}}</strong></p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>TIN No</h6>
                </div>
                <div class="col">
                    <p>{{$ac->tin}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Passport</h6>
                </div>
                <div class="col">
                    <p>{{$ac->passport}}</p>
                </div>
            </div>
        </div>
        <div class="info_table">
            <h4>Personal Information</h4>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Name</h6>
                </div>
                <div class="col">
                    <p>{{$ac->account_holder_name}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Date of Birth</h6>
                </div>
                <div class="col">
                    <p><strong>{{$ac->dob}}</strong></p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Gender</h6>
                </div>
                <div class="col">
                    <p>{{$ac->gender}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Father's Name</h6>
                </div>
                <div class="col">
                    <p>{{$ac->father_name}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Mother's Name</h6>
                </div>
                <div class="col">
                    <p class="ac_balance">{{$ac->mother_name}}</p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-3">
                    <h6>Address</h6>
                </div>
                <div class="col">
                    <p class="ac_balance">{{$ac->house_road . ',' . $ac->thana . ',' . $ac->district . '-' . $ac->post_code}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
