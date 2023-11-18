
@include('layouts.app')
@include('layouts.menu')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row" style="margin: 1% 170px 1% 1%; ">
            <div class="col-12" style="margin: 1% 8px 1% 1%; " >
                <div class="card" >
                    <div class="card-header">
                    <p class="text-center"> برنامج المستفيدين
                    </p>
                    </div>
                     <div class="card-body">
                        <form  style=" float: left "action="{{ route('exportmo')  }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <a class="btn btn-success btn-sm btn-radius" href="{{ route('exportmo') }}"><i class="fas fa-file-excel"aria-hidden="true" title="حفظ ملف اكسل"></i> </a>
                        </form>
                        
                        
                        @if ($message = Session::get('message'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                  
                    <a style=" float: left " href="{{ url('/create_mo') }}" class="btn btn-primary  btn-sm btn-radius" title="اضافة جديدة "><i class="fa fa-fw fa-plus-circle"></i>  
                    </a>
                   
                    <form  style=" float: right " action="/index_mo" method="GET">
                        <div class="form-inline mt-2">
                          <div class="col" >
                            <input type="search" name="search"class="form-control" placeholder="بحــث">
                            <button class="btn btn-secondary  btn-sm btn-radius" title=" بحــث "><i class="fas fa-search"></i></button>                          </div>
                        </div>
                      </form>
                      <div class="table-responsive" >
                        <div >
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                style="text-align: center">
                        
                            <thead class="table-dark" >               
                                <tr  >
                                    <th>#</th>
                                    <th scope="col">اسم المستفيد</th>
                                    <th scope="col">اسم الام</th>
                                    <th scope="col">التولد</th>
                                    <th scope="col"width="1%">السجل/ص</th>
                                     <th scope="col" width="1%">رقم القطعة</th>
                                    <th scope="col" width="1%">المقاطعة</th>
                                    <th scope="col" width="1%">المساحه</th>
                                    <th scope="col">تاريخ التخصيص </th>
                                    <th scope="col">البلدية</th>
                                    <th scope="col">الشريحه</th>
                                    <th scope="col">العنوان</th>
                                    <th  >الملاحضات</th>
                                    <th  >خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                
        @if($mostafeds->count())

                            @foreach($mostafeds as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Beneficiary }}</td>
                                    <td>{{ $item->Mother }}</td>
                                    <td>{{ $item->obstetrics }}</td>
                                    <td>{{ $item->repa}}</td>
                                    <td>{{ $item->piece }}</td>
                                    <td>{{ $item->boycott }}</td>
                                    <td>{{ $item->space}}</td>
                                    <td>{{ $item->Customization }}</td>
                                    <td>{{ $item->Municipal }}</td>
                                    <td>{{ $item->slide }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->notes }}</td>

                                    <td>
                                        <a href="{{ url('/mostafed/' . $item->id) }}" title="عرض "><button class="btn btn-info btn-sm" ><i  class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <a href="{{ url('/mostafed/' . $item->id . '/edit') }}" title="تعديل"><button class="btn btn-primary btn-sm"><i class="fas fa-pen"aria-hidden="true"></i></button></a>

                                        <form method="POST"class="delete_form" action="{{ url('/mostafed' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-danger btn-sm" title="حذف" ><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @else
        <tr>
            <td colspan="3">لاتوجد نتائج بحــث</td>
        </tr>
        @endif
                            </tbody>
                            
 </table>
                        <div class="d-flex justify-content-center">
                            
                    {!! $mostafeds-> render() !!}
                    </div>

                    <div class="d-flex justify-content-start" style="margin-left: -200px;margin-right: 50px; ">
                    
                    <div class="d-flex justify-content-end" >

                    عناصر الصفحة: {{$mostafeds->count()}}
                    <br>
                    الكلي:{{$mostafeds->total()}}

</div>
                   



                       
    </div>


              
@section('scripts')
    
    <script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("هل تريد فعلاً حذف العنصر"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
<script>
    $(document).ready(function() {  
    $('#example').DataTable( {
     dom: 'Bfrtip',
     'buttons': [{ 'extend': 'copy', 'title': 'Re-assigned-Queries' },
                                      { 'extend': 'excel', 'title': 'Re-assigned-Queries' },
                                      { 'extend': 'csv', 'title': 'Re-assigned-Queries'},
                                      { 'extend': 'pdf', 'title': 'Re-assigned-Queries'},
                                      { 'extend': 'print', 'title': 'Re-assigned-Queries'}
                          
                       ],
           'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, 'All']],
     } );
    
    </script>

@include('layouts.footer')
@include('layouts.footer-scrpt')
