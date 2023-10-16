<div class="content Transactions">
    <div class="transaction-box">
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
                <h4>Transactions</h4>
                <table class="transaction_table table .table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Transaction Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="w-25">Trx ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($transactions as $transaction)
                        <tr scope="row">
                            <td>{{$transaction->type}}</td>
                            @if($transaction->type == 'deposit' || $transaction->type == 'sent')
                                <td class="trx_amount red">{{'-' . $transaction->amount}}
                            @else
                                <td class="trx_amount green">{{'+' . $transaction->amount}}
                                    @endif
                                </td>
                                <td>{{$transaction->new_balance}}</td>
                                <td>{{$transaction->created_at}}</td>
                                <td class="trx">{{$transaction->trx_no}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="pagination">{{$transactions->links()}}</div>
        </div>
    </div>
</div>
