@include('layouts.app')
@include('layouts.menu')



<div class="container">
      <div class="card" style="margin: 1% 100px 1% 1%; ">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">  اضافة بيانات المستفيد </div>
                    <div class="card-body">
                        <div class="col-xl-12">
                         <form action="{{ route ('mostafed.store') }}" method="post">
                                     {!! csrf_field() !!}
                                <div class="row">
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">اسم المستفيد</label>
                                        <input type="text" placeholder="اسم المستفيد" class="form-control" name="Beneficiary" id="Beneficiary">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> اسم الام</label>
                                        <input type="text" class="form-control"  name="Mother" id="Mother"  placeholder="اسم الام">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">التولد</label>
                                        <input type="text" placeholder="التولد" class="form-control"  name="obstetrics" id="obstetrics">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">السجل-ص </label>
                                        
                                        <input type="text" placeholder="السجل-ص" class="form-control"  name="repa" id="repa">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">رقم القطعة </label>
                                        <input type="text"  class="form-control"  placeholder="رقم القطعة" name="piece" id="piece">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">المقاطعة</label>
                                        <input type="text" class="form-control"  placeholder="المقاطعة" name="boycott" id="boycott" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">المساحة</label>
                                        <input type="text" class="form-control"  placeholder="المساحة" name="space" id="space" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">تاريخ التخصيص</label>
                                        <input type="text" class="form-control"  placeholder="تاريخ التخصيص" name="Customization" id="Customization" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">البلدية</label>
                                        <input type="text" class="form-control"  placeholder="البلدية" name="Municipal" id="Municipal" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">الشريحة</label>
                                        <input type="text" class="form-control" placeholder="الشريحة" name="slide" id="slide">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">العنوان</label>
                                        <input type="text" class="form-control"  placeholder="العنوان" name="address" id="address" >
                                    </div>
                                    <div class="mb-3 col-md-6">

                                        <label class="form-label">الملاحضات</label>
                                        <input type="text" class="form-control"  placeholder="الملاحظات" name="notes" id="notes">
                                    </div>
                                </div>
                               <div style="text-align:center;">
                                <button class="btn btn-info btn-sm"> <input type="submit" value="حفظ" title="حفظ " class="btn btn-info" ><i class="fas fa-save" aria-hidden="true"></i> </button></a>
                                <a href="{{ url('index_mo') }}" title="رجوع " class="btn btn-info"><i class="fas fa-angle-double-right" aria-hidden="true"></i></a></div>
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