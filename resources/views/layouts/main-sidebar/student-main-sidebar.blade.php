<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <center><img alt="user-img" class="avatar avatar-xl brround" src="{{ URL::asset('assets/images/R (1).png') }}" width="150" height="120"><span class="avatar-status profile-status bg-green"></span>
                </div>
               <center> <div class="user-info" >
                    <h4 class="mb-0 text-muted">{{auth()->user()->name}}</h4>
                    <span class="mb-0 text-muted">{{Auth::user()->email}}</span>
                </div>
            </div>
        </div>
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard.Students') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>


        <!-- الامتحانات-->
        <li>
            <a href="{{route('student_exams.index')}}"><i class="fas fa-book-open"></i><span
                    class="right-nav-text">الامتحانات</span></a>
        </li>

        <!-- zoom-->
        <li>
            <a href="{{route('profile-student.index')}}"><i class="fas fa-camera-alt"></i><span
                    class="right-nav-text">حصص اون لاين</span></a> 
        </li>

        <!-- library-->
       
                    <li><a class="fas fa-pen-alt" href="{{ url('/Studen') }}">الكتب</a></li>
      


        <!-- Settings-->
        <li>
            <a href="{{route('profile-student.index')}}"><i class="fas fa-id-card-alt"></i><span
                    class="right-nav-text">الملف الشخصي</span></a>
        </li>

    </ul>
</div>
