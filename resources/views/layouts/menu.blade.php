@inject('slides', 'App\Models\slide')
@inject('propertys', 'App\Models\Property')
@inject('mostafeds', 'App\Models\mostafed')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/hero-carousel-3.svg')}}" class="img-circle elevation-2" alt="User Image">
          
        </div>
        <div class="info">
          <a href={{ url('home')}} class="d-block">الصفحة الرئيسية</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class=" {{ Request::is('index')?'active':''}}">
            
       

      
                <li class="nav-item">
                  <a  href="{{ url('index')}}"class="nav-link">
                  <i class="far fa-folder-open"></i>
                  <p>الامــلاك المؤجرة&emsp;&emsp;&emsp;<span class="badge badge-warning navbar-badge-right">{{$propertys->count()}}</span></p>
                </a>
                
              </li>
              
          <li class="nav-item">
            <a  href="{{ url('index_mo')}}" class="nav-link">

                  <i class="far fa-folder-open"></i>
                  <p>برنامج المستفيدين &emsp;&emsp;&emsp;<span class="badge badge-warning navbar-badge-right">{{$mostafeds->count()}}</span></p>

                </a>
              </li>
              

              <li class="nav-item">
                <a  href="{{ url('index_sl')}}" class="nav-link">
                 
                  <i class="far fa-folder-open"></i>
                  <p>الشرائح &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="badge badge-warning navbar-badge-right">{{$slides->count()}}</span></p>
                </a>
              </li>
              
              

              <li class="nav-item">
                <a  href="{{ url('upload')}}" class="nav-link">

                  <i class="far fa-folder-open"></i>
                  <p>ارشفة كتب التمليك&emsp;&emsp;&emsp;<span class="badge badge-warning navbar-badge-right">0</span></p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{ url('backup')}}" class="nav-link">

                  <i class="far fa-folder-open"></i>
                  <p> النسخ الاحتياطي </p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{ url('member')}}" class="nav-link">

                  <i class="far fa-folder-open"></i>
                  <p> كادر الامــلاك &emsp;&emsp;&emsp;&emsp;<span class="badge badge-warning navbar-badge-right">0</span></p>
                </a>
              </li>
              
              
            </ul>
          </li>
         
          
         
          
     
       
       
          
             
             
          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

