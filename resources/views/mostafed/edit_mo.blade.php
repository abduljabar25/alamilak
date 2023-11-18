
@include('layouts.app')
@include('layouts.menu')

<div class="container">
<div class="card" style="margin: 1% 100px 1% 1%; ">
  <div class="card-header"> تعديل البيانات</div>
  <div class="card-body">
  

      <form action="{{ route('mostafed.update', $mostafeds->id) }}" method="post">
      {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$mostafeds->id}}" id="id" />
             <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">اسم المستفيد</label>
                                        <input type="text" placeholder="اسم المستفيد" class="form-control" name="Beneficiary" id="Beneficiary" value="{{$mostafeds->Beneficiary}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> اسم الام</label>
                                        <input type="text" class="form-control"  name="Mother" id="Mother"  placeholder="اسم الام"  value="{{$mostafeds->Mother}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">التولد</label>
                                        <input type="text" placeholder="التولد" class="form-control"  name="obstetrics" id="obstetrics"  value="{{$mostafeds->obstetrics}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">السجل-ص </label>
                                        
                                        <input type="text" placeholder="السجل-ص" class="form-control"  name="repa" id="repa"  value="{{$mostafeds->repa}}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">رقم القطعة </label>
                                        <input type="text"  class="form-control"  placeholder="رقم القطعة" name="piece" id="piece" value="{{$mostafeds->piece}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">المقاطعة</label>
                                        <input type="text" class="form-control"  placeholder="المقاطعة" name="boycott" id="boycott"  value="{{$mostafeds->boycott}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">المساحة</label>
                                        <input type="text" class="form-control"  placeholder="المساحة" name="space" id="space" value="{{$mostafeds->space}}" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">تاريخ التخصيص</label>
                                        <input type="text" class="form-control"  placeholder="تاريخ التخصيص" name="Customization" id="Customization" value="{{$mostafeds->Customization}}" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">البلدية</label>
                                        <input type="text" class="form-control"  placeholder="البلدية" name="Municipal" id="Municipal"  value="{{$mostafeds->Municipal}}" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">الشريحة</label>
                                        <input type="text" class="form-control" placeholder="الشريحة" name="slide" id="slide"  value="{{$mostafeds->slide}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">العنوان</label>
                                        <input type="text" class="form-control"  placeholder="العنوان" name="address" id="address" value="{{$mostafeds->address}}" >
                                    </div>
                                    <div class="mb-3 col-md-6">

                                        <label class="form-label">الملاحضات</label>
                                        <input type="text" class="form-control"  placeholder="الملاحظات" name="notes" id="notes"  value="{{$mostafeds->notes}}">
                                    </div>
                                </div>

                                <div style="text-align:center;">
                                    <button class="btn btn-info btn-sm"> <input type="submit" value="تعديل" title="تعديل " class="btn btn-info" ><i class="fas fa-save" aria-hidden="true"></i> </button></a>
                                    <a href="{{ url('index_mo') }}" title="رجوع " class="btn btn-info"><i class="fas fa-angle-double-right" aria-hidden="true"></i></a></div>
    </form>
    
  </div>
</div>
</div>
@include('layouts.footer')
@include('layouts.footer-scrpt')
