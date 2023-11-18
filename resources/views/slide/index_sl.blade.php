
@include('layouts.app')
@include('layouts.menu')

<div class="container-fluid">
        <div class="row" style="margin: 1% 190px 1% 1%; ">
            <div class="col-12" style="margin: 1% 15px 1% 1%; " >
                <div class="card" >
                    <div class="card-header">
                        <p class="text-center">                    طلبات تخصيص قطع الاراضي السكنية حسب الشرائح
                        </p>
                        <form  style=" float: left "action="{{ route('export')  }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <a class="btn btn-success btn-sm btn-radius" href="{{ route('export') }}"><i class="fas fa-file-excel"aria-hidden="true" title="حفظ ملف اكسل"></i> </a>
                        </form>
                        @if ($message = Session::get('message'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <a style=" float: left " href="{{ url('/create_sl') }}" class="btn btn-primary  btn-sm btn-radius" title="اضافة جديدة "><i class="fa fa-fw fa-plus-circle"></i>  
                    </a>
                    <form  style=" float: right " action="/index_sl" method="GET">
                        <div class="form-inline">
                          <div class="col" >
                            <input type="search" name="search"class="form-control" placeholder="بحــث">
                            <button class="btn btn-secondary  btn-sm btn-radius" title=" بحــث "><i class="fas fa-search"></i></button>                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-body">
                       
                        
                        
                        
                        
                   
                   
                    
                        <div class="table-responsive" >
                            <div >
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                    style="text-align: center">
                           
                                <thead class="table-dark" >
                                    <tr>
                                        <th>#</th>
                                        <th scope="col" width="20%">الاسم الثلاثي</th>
                                        <th scope="col">اسم الام</th>
                                        <th scope="col" >اسم الزوجة</th>
                                        <th scope="col">نوع الشريحة </th>
                                        <th scope="col" >تاريخ استلام المعاملة </th>
                                        <th scope="col">رقم المعاملة </th>
                                        <th scope="col"> رقم الهاتف </th>
                                        <th scope="col" width="15%">خيارات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @if($slides->count())
                                @foreach($slides as $item)
                                    <tr>
                             
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->Mother }}</td>
                                        <td>{{ $item->wife }}</td>
                                        <td>{{ $item->slide }}</td>
                                        <td>{{ $item->Datereceipt }}</td>
                                        <td>{{ $item->transaction }}</td>
                                        <td>{{ $item->notes }}</td>

                                        <td>
                                            <a href="{{ url('/slide/' . $item->id) }}" title="عرض "><button class="btn btn-info btn-sm"><i class="fa fa-print" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/slide/' . $item->id . '/edit') }}" title=" تعديل"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw "aria-hidden="true"></i> </button></a>

                                            <form method="POST" class="delete_form"action="{{ url('/slide' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                
                                                <button type="submit" class="btn btn-danger btn-sm" title="حذف" ><i class="fa fa-trash"aria-hidden="true"></i> </button>
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
                        </div>
                        <div class="d-flex justify-content-center">
                        {!! $slides->appends(['sort' => 'slides'])->links() !!}
                        </div>
                        <div class="d-flex justify-content-start" style="margin-left: -200px;margin-right: 50px; ">
                        <div class="d-flex justify-content-end" >

                            عناصر الصفحة: {{$slides->count()}}
                            <br>
                            الكلي:{{$slides->total()}}
    </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
@include('layouts.footer')
@include('layouts.footer-scrpt')