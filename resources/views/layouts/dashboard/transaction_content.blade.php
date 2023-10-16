<div class="content Transactions">
    <div class="transaction-box">

        <h4>Transactions</h4>
        <div class="container">
            <div class="info_table">
                <h4>Account Information</h4>
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
                        <h6>Balance</h6>
                    </div>
                    <div class="col">
                        <p class="ac_balance">{{$ac->balance}} ৳</p>
                    </div>
                </div>
            </div>
            <div class="info_table">
                <table>
                    <thead>
                        <tr>
                            <th>Transaction Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Trx ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->type}}</td>
                            <td>
                                @if($transaction->type == 'deposit' || $transaction->type == 'sent')
                                {{'-' . $transaction->amount}}
                                @else
                                {{'+' . $transaction->amount}}
                                @endif
                            </td>
                            <td>{{$transaction->new_balance}}</td>
                            <td>{{$transaction->created_at}}</td>
                            <td>{{$transaction->trx_no}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
