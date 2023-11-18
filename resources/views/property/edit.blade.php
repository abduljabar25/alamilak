
@include('layouts.app')
@include('layouts.menu')

<div class="container">
<div class="card" style="margin: 1% 100px 1% 1%; ">
  <div class="card-header">تعديل بيانات الملك </div>
  <div class="card-body">
  

      <form action="{{ route('property.update', $property->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        @if(session()->has('message'))
    <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">×</button>    

        {{ session('message') }}
    </div>
 @endif
        <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">نوع الملك  </label>
              <input type="text" name="tyeppro" class="form-control" value="{{$property->tyeppro}}" id="tyeppro">
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">            رقم الملك              </label>
              <input type="text" class="form-control" name="numpro" value="{{$property->numpro}}" id="numpro" >
          </div>
      </div>
      <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">اسم المستأجر</label>
              <input type="text" name="name"  class="form-control"  value="{{$property->name}}" id="name">
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">مدة الايجار</label>
              
              <input type="text" name="RenTerm " class="form-control"  value="{{$property->RenTerm}}" id="RenTerm">

          </div>
      </div>
      <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">مبلغ الايجار  </label>
              <input type="text"  class="form-control"  name=" amount " value="{{$property->amount}}" id="amount">
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">بداية العقد</label>
              <input type="date" class="form-control"  name="begcontract " value="{{$property->begcontract}}" id="begcontract" >
          </div>
      </div>
      <div class="row">
          <div class="mb-3 col-md-6">
              <label class="form-label">نهاية العقد</label>
              <input type="date" class="form-control"  name="endcontract " value="{{$property->endcontract}}" id="endcontract" >
          </div>
          <div class="mb-3 col-md-6">
              <label class="form-label">الملاحضات </label>
              <input type="text" class="form-control" name="notes" value="{{$property->notes}}" id="notes" >
          </div>
      </div>
      <div style="text-align:center;">
        <button class="btn btn-info btn-sm"> <input type="submit" value="تعديل" title="تعديل " class="btn btn-info" ><i class="fas fa-save" aria-hidden="true"></i> </button></a>
        <a href="{{ url('index') }}" title="رجوع " class="btn btn-info"><i class="fas fa-angle-double-right" aria-hidden="true"></i></a></div>

    </form>
    
  </div>
</div>
</div>
@include('layouts.footer')
@include('layouts.footer-scrpt')
