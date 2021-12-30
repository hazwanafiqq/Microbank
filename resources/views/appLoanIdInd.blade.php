<!DOCTYPE html>

<head>
    <title>MICROBANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
        <div class="container-fluid">

            <style>
                body{background:rgb(255, 255, 255)!important;}
            </style>
            <br>
            <h2 class="text-left">Micro Reports</h2>
            <hr class="py-1">
            <br>
            <form class="row g-3 m-3" method="POST" action="{{ route('addLoansStore') }}" enctype="multipart/form-data">
                @csrf
                <h4 class="text-left">Executive</h4>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Code</label>
                  <input type="number" class="form-control" id="exce id" name="execCode">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="execName">
                </div>

                <h4 class="text-left">Loan Detail</h4>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Loan ID</label>
                    <input type="number" class="form-control" id="loan id" name="loanId">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="name" name="loadCust">
                  </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Amount (RM)</label>
                  <input type="number" class="form-control" id="amount" name="loanAmount">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Status</label>
                    <select id="status" name="loanStatus" class="form-select">
                        <option value="1">Serviced</option>
                        <option value="0">Not Serviced</option>
                    </select>
                  </div>
                <div class="col-14">
                  <button type="submit" class="btn btn-primary">Genarate</button>
                </div>
              </form>
            
            <hr class="py-1 m-3">
            <br>
            <br>
            <h4 class="text-center">Approvals</h4>
            <div class="table-responsive table-bordered table-sm m-5 p-12">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Bil</th>
                          <th scope="col">Loan Id</th>
                          <th scope="col">Exeutive Code</th>
                          <th scope="col">Type</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($listApprovals as $listApproval)
                        <tr>
                        <th scope="row">{{ $listApproval->id}}</th>
                        <td>{{ $listApproval->appLoanId}}</td>
                        <td>{{ $listApproval->appExecCode}}</td>
                            @if ($listApproval->appType == 0)
                                <td>{{'Recommendation'}}</td>                     
                            @elseif(($listApproval->appType == 1))
                                <td>{{'Approval'}}</td>
                            @endif    
                        </tr>
                        @endforeach                       
                    </tbody> 
                </table>
            </div>
        </div>
    </body>
</html>
