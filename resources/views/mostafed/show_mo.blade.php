
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
                                    <br>
                                    <img src="{{asset('assets/img/images.png')}}" width="7%" height="7%" alt="User Image">
                                </div><!-- billed-from -->
                        </div><!-- invoice-header -->
                        <div class="row mg-t-20">
        
                            <div class="col-md">
                                <label class="tx-gray-600">معلومات المستفيد</label>
                                       <p class="invoice-info-row"><span> <b>اسم المستفيد :</b></span>
                                    <span>{{ $mostafeds->Beneficiary }}</span></p>
                                    <p class="invoice-info-row"><span> <b>الشريحة  :</b></span>
                                        <span>{{ $mostafeds->slide }}</span></p>
                                   <p class="invoice-info-row"><span> <b> رقم القطعة :</b></span>
                                    <span>{{$mostafeds->piece}}</span></p>
                                    <p class="invoice-info-row"><span>  <b>رقم المقاطعة :</b></span>
                                        <span>{{ $mostafeds->boycott}}</span></p>
                                        <p class="invoice-info-row"><span> <b> تاريخ استلام القطعة :</b></span>
                                            <span>{{ $mostafeds->created_at}}</span></p>
                                
                            </div>
                        </div>
                        <div class="visible-print text-center">
                        </div>
                        
                </div>
                <hr class="mg-b-40">
                        <div class="float-left d-none d-sm-inline-block">
                            البريد الالكتروني للدائرة:alfuhoodorqinfodep@gmail.com 
                          </div>
                          <div class="float-right d-none d-sm-inline-block">
                            {{ $mostafeds->created_at }}                          </div>
            
            </div>
            
        </div><!-- COL-END -->
        <div class="float-right d-none d-sm-inline-block">
   اسم وتوقيع مدقق البيانات         </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <body style="text-align:center;">
      
        <div >
            <a href="{{ url('index_mo') }}" title="رجوع "><button class="btn btn-info btn-sm"><i class="fas fa-angle-double-right" aria-hidden="true"></i> </button></a>

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
              