<div class="scrollbar side-menu-bg" style="overflow: scroll">
   
    
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <center><img alt="user-img" class="avatar avatar-xl brround" src="{{ URL::asset('assets/images/R.png') }}" width="150" height="120"><span class="avatar-status profile-status bg-green"></span>
                </div>
               <center> <div class="user-info" >
                    <h4 class="mb-0 text-muted">{{auth()->user()->Name_Father}}</h4>
                    <span class="mb-0 text-muted">{{Auth::user()->email}}</span>
                </div>
            </div>
        </div>
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard.parents') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>


        <!-- الابناء-->
        <li>
            <a href="{{route('sons.index')}}"><i class="fas fa-book-open"></i><span
                    class="right-nav-text">الابناء</span></a>
        </li>

        <!-- تقرير الحضور والغياب-->
        <li>
            <a href="{{route('sons.attendances')}}"><i class="fas fa-book-open"></i><span
                    class="right-nav-text">تقرير الحضور والغياب</span></a>
        </li>

        <!-- تقرير المالية-->
        <li>
            <a href="{{route('sons.fees')}}"><i class="fas fa-book-open"></i><span
                    class="right-nav-text">تقرير المالية</span></a>
        </li>


        <!-- Settings-->
        <li>
            <a href="{{route('profile.show.parent')}}"><i class="fas fa-id-card-alt"></i><span
                    class="right-nav-text">الملف الشخصي</span></a>
        </li>

    </ul>
</div>
