
@include('layouts.app')
@include('layouts.menu')
<div class="container">
  <div class="card" style="margin: 1% 100px 1% 1%; ">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">  اضافة بيانات الملك </div>
                <div class="card-body">
                    <div class="col-xl-12">
     <form action="{{ route('property.store') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">نوع الملك  </label>
              <input type="text" placeholder="نوع الملك  " class="form-control" name="tyeppro" id="tyeppro">
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">            رقم الملك              </label>
              <input type="text" class="form-control"  name="numpro" id="numpro"  placeholder="رقم الملك ">
          </div>
      </div>
      <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">اسم المستأجر</label>
              <input type="text" placeholder="اسم المستأجر" class="form-control"  name="name" id="name">
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">مدة الايجار</label>
              
              <input type="text" placeholder="مدة الايجار" class="form-control"  name="RenTerm" id="RenTerm">

          </div>
      </div>
      <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">مبلغ الايجار السنوي </label>
              <input type="text"  class="form-control"  placeholder=" مبلغ الايجار السنوي " name="amount" id="amount">
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">بداية العقد</label>
              <input type="date" class="form-control"  placeholder="بداية العقد" name="begcontract" id="begcontract" >
          </div>
      </div>
      <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">نهاية العقد</label>
              <input type="date" class="form-control"  placeholder="نهاية العقد" name="endcontract" id="endcontract" >
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">الملاحضات </label>
              <input type="text" class="form-control"  placeholder="الملاحضات " name="notes" id="notes" >
          </div>
      </div>
      <div style="text-align:center;">
        <button class="btn btn-info btn-sm"> <input type="submit" value="حفظ" title="حفظ " class="btn btn-info" ><i class="fas fa-save" aria-hidden="true"></i> </button></a>
        <a href="{{ url('index') }}" title="رجوع " class="btn btn-info"><i class="fas fa-angle-double-right" aria-hidden="true"></i></a></div>
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