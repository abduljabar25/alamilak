
@include('layouts.app')
@include('layouts.menu')
<div class="container-fluid">
    <div class="row" style="margin: 1% 190px 1% 1%; ">
        <div class="col-12" style="margin: 1% 15px 1% 1%; " >
            <div class="card" >
                <div class="card-header">
                    <p class="text-center">                  الاملاك المؤجرة
                    </p>
                </div>
                <div class="card-body">
                    <form  style=" float: left "action="{{ route('exportpro')  }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <a class="btn btn-success btn-sm btn-radius" href="{{ route('exportpro') }}"><i class="fas fa-file-excel" title="حفظ ملف اكسل"></i> </a>
                    </form>
                    
                    
                    @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <a style=" float: left " href="{{ url('/create') }}" class="btn btn-primary  btn-sm btn-radius" title="اضافة جديدة "><i class="fa fa-fw fa-plus-circle"></i>  
                </a>
                    
               
                <form  style=" float: right " action="/index" method="GET">
                    <div class="form-inline mt-2">
                      <div class="col" >
                        <input type="search" name="search"class="form-control" placeholder="بحث عن رقم العقار">
                        <button class="btn btn-secondary  btn-sm btn-radius" title=" بحــث "><i class="fas fa-search"></i></button>                          </div>
                    </div>
                  </form>
                
                  <div class="table-responsive" >
                    <div >
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                            style="text-align: center">
                   
                            <thead class="table-dark" >
                                <tr>
                                    <th>#</th>
                                    <th scope="col" width="10%">نوع الملك </th>
                                    <th scope="col"> رقم الملك</th>
                                    <th scope="col" > اسم المسأجر</th>
                                    <th scope="col">مدة الايجار  </th>
                                    <th scope="col" > مبلغ الايجار السنوي   </th>
                                    <th scope="col">بداية العقد  </th>
                                    <th scope="col"> نهاية العقد </th>
                                    <th scope="col"> الملاحظات </th>
                                    <th scope="col" width="16%">خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($propertys->count())
                            @foreach($propertys as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tyeppro }}</td>
                                    <td>{{ $item->numpro }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->RenTerm }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->begcontract }}</td>
                                    <td>{{ $item->endcontract }}</td>
                                    <td>{{ $item->notes }}</td>

                                    <td>
                                        <a href="{{ url('/property/' . $item->id) }}" title="عرض "><button class="btn btn-info btn-sm"><i class="fa fa-print" aria-hidden="true"></i> </button></a>
                                        <a href="{{ url('/property/' . $item->id . '/edit') }}" title=" تعديل"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw "aria-hidden="true"></i> </button></a>

                                        <form method="POST" class="delete_form"action="{{ url('/property' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
                    {!! $propertys->appends(['sort' => 'votes'])->links() !!}
                    </div>
                    <div class="d-flex justify-content-start" style="margin-left: -200px;margin-right: 50px; ">
                    <div class="d-flex justify-content-end" >

                        عناصر الصفحة: {{$propertys->count()}}
                        <br>
                        الكلي:{{$propertys->total()}}

</div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <main class="py-4">
       
        @yield('content')
    </main>
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