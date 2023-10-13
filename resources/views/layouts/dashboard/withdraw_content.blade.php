<div class="content Withdraw">
    <div class="withdraw-box">

        <h4>Withdraw</h4>
        <form action="{{route('withdraw')}}" method="post">
            @csrf
            <div class="row align-items-start">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input disabled type="text" name="account_holder_name" id="account_holder_name"
                               class="form-control" value="{{$ac->account_holder_name}}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input disabled type="email" name="email" id="email" class="form-control" value="{{$ac->email}}"
                               required>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="form-group">
                        <label for="account_no">Account No</label>
                        <input disabled type="number" name="account_no" id="account_no" class="form-control"
                               value="{{$ac->account_no}}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" min="100" name="amount" id="amount" class="form-control amount"
                               placeholder="Enter Amount" required>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark">Withdraw</button>
            </div>
        </form>
    </div>
</div>


