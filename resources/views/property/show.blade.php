

@include('layouts.app')
@include('layouts.menu')
<div class="container">
    <div class="row row-sm" id='printMe' >
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <br>
                <br>
                <br>
                <div class="card card-invoice">
                    <div class="card-body">
                        <div class="invoice-header">
                           
                            <div class="billed-from">
                                <h6>مديرية بلدية الفهود</h6>
                                <p>معاملة ملك تجاري مستأجر     <br>
                                    <br>
                                    <img src="{{asset('assets/img/images.png')}}" width="7%" height="7%" alt="User Image">
                                </div><!-- billed-from -->
                        </div><!-- invoice-header -->
                        <div class="row mg-t-20">
        
                            <div class="col-md">
                                <label class="tx-gray-600">معلومات الملك</label>
                                       <p class="invoice-info-row"><span> <b>نوع الملك  :</b></span>
                                    <span>{{ $propertys->tyeppro }}</span></p>
                                    <p class="invoice-info-row"><span> <b> اسم المستأجر  :</b></span>
                                        <span>{{ $propertys->name }}</span></p>
                                    <p class="invoice-info-row"><span>  <b>رقم الملك  :</b></span>
                                        <span>{{ $propertys->numpro}}</span></p>
                                        <p class="invoice-info-row"><span> <b> مدة الايجار :</b></span>
                                            <span>{{ $propertys->RenTerm}}</span></p>
                                        <p class="invoice-info-row"><span>  <b> بداية العقد  :</b></span>
                                            <span>{{ $propertys->begcontract}}</span></p>
                                            <p class="invoice-info-row"><span>  <b> نهاية العقد  :</b></span>
                                                <span>{{ $propertys->endcontract}}</span></p>
                                        <p class="invoice-info-row"><span> <b>  مبلغ الايجار السنوي   :</b></span>
                                            <span>{{ $propertys->amount}}</span></p>
                                
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="visible-print text-center">
                       
                            {!! QrCode::color(150,90,10)->size(100)->encoding('UTF-8')->generate( $propertys->numpro ); !!}
                        </div>
                </div>
                <br><br>
                <hr class="mg-b-40">
                        <div class="float-left d-none d-sm-inline-block">
                          </div>
                          <div class="float-right d-none d-sm-inline-block">
                            {{ $propertys->created_at }}                          </div>
            
            </div>
            
        </div><!-- COL-END -->
        
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <body style="text-align:center;">
      
        <div >
            <a href="{{ url('index') }}" title="رجوع "><button class="btn btn-info btn-sm"><i class="fas fa-angle-double-right" aria-hidden="true"></i> </button></a>

                        <a  title="'طباعة' "><button class="btn btn-info btn-sm" id="print_Button" onclick="printDiv('printMe')"><i class="fa fa-print" aria-hidden="true"></i> </button></a>  
           
    
        
    
    </div>
    <div class="mt-4">
       
    
    </div>
    </div>
    </div>
    
    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
        }
    </script>
@include('layouts.footer')
@include('layouts.footer-scrpt')
            