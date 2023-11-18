
@include('layouts.app')
@include('layouts.menu')

<div class="container">
<div class="card" style="margin: 1% 100px 1% 1%; ">
  <div class="card-header">تعديل البيانات </div>
  <div class="card-body">
  

      <form action="{{ route('slide.update', $slides->id) }}" method="post">
        {!! csrf_field() !!}
        @method('PUT')

        @if(session()->has('message'))
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>    
    
            {{ session('message') }}
        </div>
        @endif
  
        <input type="hidden" name="id" id="id" value="{{$slides->id}}" id="id" />
        <label>   الاسم الثلاثي    </label></br>
        <input type="text" name="name" id="name"  value="{{$slides->name}}" class="form-control"></br>
        <label>اسم الام  </label></br>
        <input type="text" name="Mother" id="Mother"  value="{{$slides->Mother}}" class="form-control"></br>
        <label>اسم الزوجة</label></br>
        <input type="text" name="wife" id="wife"  value="{{$slides->wife}}" class="form-control"></br>
        <label>نوع الشريحة</label></br>
        <input type="text" name="slide" id="slide"  value="{{$slides->slide}}" class="form-control"></br>
        <label>تاريخ استلام المعاملة </label></br>
        <input type="date" name="Datereceipt" id="Datereceipt"  value="{{$slides->Datereceipt}}" class="form-control"></br>
        <label>رقم المعاملة</label></br>
        <input type="text" name="transaction" id="transaction"  value="{{$slides->transaction}}" class="form-control"></br>
        <label>رقم الهاتف </label></br>
        <input type="text" name="notes" id="notes"  value="{{$slides->notes}}" class="form-control"></br>
        <div style="text-align:center;">
          <button class="btn btn-info btn-sm"> <input type="submit" value="تعديل" title="تعديل " class="btn btn-info" ><i class="fas fa-save" aria-hidden="true"></i> </button></a>
          <a href="{{ url('index_sl') }}" title="رجوع " class="btn btn-info"><i class="fas fa-angle-double-right" aria-hidden="true"></i></a></div>    </form>
    
  
  </div>
</div>
</div>
@include('layouts.footer')
@include('layouts.footer-scrpt')
