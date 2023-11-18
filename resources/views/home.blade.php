@include('layouts.app')
@include('layouts.menu')

@inject('slides', 'App\Models\slide')
@inject('propertys', 'App\Models\Property')
@inject('mostafeds', 'App\Models\mostafed')
@inject('User', 'App\Models\User')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
        <div class="row" style="margin: 4% 240px 1% 1%; ">

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3> {{$propertys->count()}}</h3>

                    <p>الاملاك المؤجرة</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$mostafeds->count()}}</h3>

                    <p> المستفيدين</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$slides->count()}}</h3>

                    <p>الشرائح</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3> {{$User->count()}}</h3>

                    <p>مستخدمين التطبيق </p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    
            <!-- /.card -->

            <!-- Calendar -->
            
            <!-- /.card -->
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>

@include('layouts.footer')
@include('layouts.footer-scrpt')