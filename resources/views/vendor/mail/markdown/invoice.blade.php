<head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        </head>
        
        <Style>
        
        
        body {
            background: light-grey;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        
        </style>
        
        
        <div class="holder" style="margin-top: 150px;">
        <Center>
        <h4 style="color:orange;">Perfect!, u heeft zojuist een vrijblijvende offerte aangevraagd via DealNL</h4>
        </center><br>
        <div class="progress">
        <div class="steptwo" style="margin: 0px; padding: 0px; background-color: orange; height: 100px; width: 100%;">
        </div>
        </div>
        </div>
        <div class="container" style="margin-top:100px;">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="border: solid orange; border-radius:20px;">
                        <div class="card-body p-0">
                            <div class="row p-5">
                                <div class="col-md-6">
                                    <img src="img/logo.png">
                                </div>
        
                                <div class="col-md-6 text-right">
                                    <p class="font-weight-bold mb-1">Offerte Aanvraag</p>
                                    <p class="text-muted">{{ date('m-d-y')}}</p>
                                </div>
                            </div>
        
                            <hr class="my-5">
        
                            <div class="row pb-5 p-5">
                                <div class="col-md-6">
                                    <p class="font-weight-bold mb-4" id="client informatie">Klant informatie</p>
                                    <p class="mb-1" id="namecar">John Doe, Mrs Emma Downson</p>
                                    <p>DealNL</p>
                                    <p class="mb-1" id="engine">Berlin, Germany</p>
                                    <p class="mb-1" id="">6781 45P</p>
                                </div>
        
                                <div class="col-md-6 text-right">
                                    <p class="font-weight-bold mb-4">Payment Details</p>
                                    <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                    <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                    <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                    <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                                </div>
                            </div>
        
                            <div class="row p-5">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="car-invoice">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        
                            <div class="d-flex flex-row-reverse bg-dark text-white p-4" style="border-radius:20px;">
                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Grand Total</div>
                                    <div class="h2 font-weight-light">$234,234</div>
                                </div>
        
                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Discount</div>
                                    <div class="h2 font-weight-light">10%</div>
                                </div>
        
                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Sub - Total amount</div>
                                    <div class="h2 font-weight-light">$32,432</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
        
        <script src="{{asset('js/car-invoice.js')}}"></script>
        