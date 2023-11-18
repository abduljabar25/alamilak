
@include('layouts.app')
@include('layouts.menu')
<div class="container">
  <div class="card" style="margin: 1% 100px 1% 1%; ">
    <div class="row">
        <div class="col-xl-12">
          <div class="card-header">اضافة طلب تخصيص</div>

            <div class="card">
                <div class="card-body">
                    <div class="col-xl-12">
                      <form action="{{ route ('store_sl') }}" method="post">
                        {!! csrf_field() !!}
                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">الاسم الثلاثي  </label>
                                    <input type="text" placeholder="الاسم الثلاثي  " type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label"> اسم الام</label>
                                    <input type="text" name="Mother" id="Mother" class="form-control"  placeholder="اسم الام">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">اسم الزوجة</label>
                                    <input type="text" placeholder="اسم الزوجة"  name="wife" id="wife" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">نوع الشريحة</label>
                                    <input type="text" placeholder="نوع الشريحة" class="form-control"  name="slide" id="slide">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">تاريخ استلام المعاملة </label>
                                    <input type="date"  class="form-control"  placeholder=" " name="Datereceipt" id="Datereceipt">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">رقم المعاملة</label>
                                    <input type="text" class="form-control"  placeholder="رقم المعاملة "name="transaction" id="transaction">
                                </div>
                            </div>
                           
                                
                            <div class="row">
                               
                                <div class="mb-3 col-md-6">

                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="text" class="form-control"  placeholder="رقم الهاتف" name="notes" id="notes">
                                </div>
                            </div>
                           <div style="text-align:center;">
                            <button class="btn btn-info btn-sm"> <input type="submit" value="حفظ" title="حفظ " class="btn btn-info" ><i class="fas fa-save" aria-hidden="true"></i> </button></a>
                            <a href="{{ url('index_sl') }}" title="رجوع " class="btn btn-info"><i class="fas fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
       
  
        
        
        
  
  


@include('layouts.footer')
@include('layouts.footer-scrpt')