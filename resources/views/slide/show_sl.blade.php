
@include('layouts.app')
@include('layouts.menu')
@include('layouts.head')
@inject('users', 'App\Models\User')
<div class="container"    >
   
    <div class="card text-center">
        
        <div class="card-header">
            <ul class="nav nav-pills justify-content-center" id="tabs" class="nav nav-pills nav-justified justify-content-center">
                <li class="nav-item">
                    <a class="active nav-link active" href="#post" data-toggle="tab">وصل استلام معاملة تخصيص</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#link" data-toggle="tab">طلب تخصيص قطعة ارض</a>
                </li>
            </ul>
        </div>
        <div class="card-body" >
           
            <div class="tab-content">
                <div class="tab-pane active" id="post">
                    <div class="row row-sm" id="printMe" >
                        <div class="col-md-12 col-xl-12">
                            <div class=" main-content-body-invoice" >
                                <br>
                                <br>
                                <br>
                                <div class="card card-invoice">
                                    <div class="card-body">
                                        <div class="invoice-header">
                                           
                                            <div class="billed-from">
                                                <h6>مديرية بلدية الفهود</h6>
                                                <p>وصل استلام معاملة تخيصيص قطعة ارض سكنية<br>
                                                    <br>
                                                    <img src="{{asset('assets/img/images.png')}}" width="7%" height="7%" alt="User Image">
                                                </div><!-- billed-from -->
                                        </div><!-- invoice-header -->
                                        <div class="row mg-t-20">
                        
                                            <div class="col-md">
                                                <label class="tx-gray-600">معلومات المواطن</label>
                                                       <p class="invoice-info-row"><span> <b>الاسم :</b></span>
                                                    <span>{{ $slides->name }}</span></p>
                                                   <p class="invoice-info-row"><span> <b> الشريحة :</b></span>
                                                    <span>{{ $slides->slide}}</span></p>
                                                    <p class="invoice-info-row"><span>  <b>رقم المعاملة :</b></span>
                                                        <span>{{ $slides->transaction}}</span></p>
                                                        <p class="invoice-info-row"><span> <b> تاريخ استلام المعاملة :</b></span>
                                                            <span>{{ $slides->Datereceipt}}</span></p>
                                                
                                            </div>
                                        </div>
                                        <br>
                                       
                                        <div class="visible-print text-center">
                                            {!! QrCode::color(150,90,10)->size(100)->encoding('UTF-8')->generate( $slides->name ); !!}
                                        </div>
                                </div>
                                <hr class="mg-b-40">
                                        <div class="float-left d-none d-sm-inline-block">
                                            البريد الالكتروني للدائرة:alfuhoodorqinfodep@gmail.com 
                                          </div>
                                          <div class="float-right d-none d-sm-inline-block">
                                            {{ $slides->created_at->format('Y-m-d') }} 
                                                                </div>
                                                                <div> by:Abduljabbar_Jaleel</div>
                            </div>
                            
                        </div><!-- COL-END -->
                       
                        <div class="float-right d-none d-sm-inline-block">
                            <p class="text-center"> 
                                 توقيع مستلم المعاملة 
                <br>     {{Auth::user()->name}}             
                            </p>
                         </div>
                         <div class="float-left d-none d-sm-inline-block">
                            <p class="text-center"> 
                الختم            </p>
                         </div>
                         
                    </div>
                    <!-- row closed -->
                    </div>
                    <div  style="text-align:center;">
                        <a href="{{ url('index_sl') }}" title="رجوع "><button class="btn btn-info btn-sm"><i class="fas fa-angle-double-right" aria-hidden="true"></i> </button></a>
            
                        <a  title="'طباعة' "><button class="btn btn-info btn-sm" id="print_Button" onclick="printDiv('printMe')"><i class="fa fa-print" aria-hidden="true"></i> </button></a>  
           
                        </div>                    </div>
                    <body style="text-align:center;">
                      
                        <div >
                           
                    
                        

                    </div>
                    
                <div class="tab-pane" id="link">
                    <div class="row row-sm" id='divorder' >
                    <div class="col-md-12 col-xl-12">
                        <div class=" main-content-body-invoice" >
                            <br>
                            <br>
                            <br>
                            <div >
                                <div >
                                    <div class="invoice-header">
                                       
                                        <div class="billed-from">
                                            <br><br>
                                            <h3>طلب تخيصيص قطعة ارض سكنية</h3>
                                            <br><br>

                                            <h5>يرجى التفضل بالموافقة على تخصيص قطعة ارض سكنية لي ضمن حدود بلديتكم لكوني ضمن شريحة(<span>{{ $slides->slide}}</span>)واكملت كافة المستمسكات المطلوبة واني مستعد لدفع كافة الرسوم القانونية المترتبة على ذلك ولكم الشكر والتقدير...<br>
                                                <br>
                                            </div><!-- billed-from -->
                                    </div><!-- invoice-header -->
                                    <div class="row mg-t-20">
                    
                                        
                                    </div>
                                    <br>
                                   <br>
                                   <br><br><br><br><br>
                                   <br><br><br><br><br>
                                   <br><br><br><br><br>

                            </div>
                            
                        
                    </div><!-- COL-END -->
                   
                    <div class="float-right d-none d-sm-inline-block">
                        <p class="text-center"> 
            المواطن/ه<br>     {{$slides->name}}             
                        </p>
                        <p class="text-center"> 
                            <p class="invoice-info-row"><span>  <b>رقم المعاملة :</b></span>
                                <span>{{ $slides->transaction}}</span></p>
                                <p class="invoice-info-row"><span> <b> تاريخ استلام المعاملة :</b></span>
                                    <span>{{ $slides->Datereceipt}}</span></p> 
                                        </p>
                                        <p class="invoice-info-row"><span> <b>   رقم الهاتف :</b></span>
                                            <span>{{ $slides->notes}}</span></p> 
                                                </p>
                                        <div class="visible-print text-center">
                                           
                                            {!! QrCode::color(150,90,10)->size(50)->encoding('UTF-8')->generate( $slides->name ); !!}
                                        </div>
                     </div>
                     
                     <div  class="float-right d-none d-sm-inline-block">
                        </div>
                </div>
                <!-- row closed -->
                </div>
                <!-- Container closed -->
                </div>
                <body style="text-align:center;">
                  
                    <div >
                        <a href="{{ url('index_sl') }}" title="رجوع "><button class="btn btn-info btn-sm"><i class="fas fa-angle-double-right" aria-hidden="true"></i> </button></a>
            
                                    <a  title="'طباعة' "><button class="btn btn-info btn-sm" id="print_Button" onclick="printDiv('divorder')"><i class="fa fa-print" aria-hidden="true"></i> </button></a>  
                       
                
                    
                
                </div>
                <div class="mt-4">
                   
                
                </div>
                </div>
                </div>					</div>              </div></div>
            </div>
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
    <script type="text/javascript">
        function printDiv(divorder) {
            var printContents = document.getElementById(divorder).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
        }
    </script>
    
@include('layouts.footer')
@include('layouts.footer-scrpt')