<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"
            style="padding-top: 20px">
            <li class="nav-item @if( request()->path() == 'home'  ) active open @endif ">
                <a href="{{route('home')}}" class="nav-link ">
                    <i class="fa fa-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
          
            
            <li class="nav-item  @if( request()->path() == 'admin/general-setting'  ) active open @endif ">
                <a href="{{route('admin.general-setting')}}" class="nav-link ">
                    <i class="fa fa-cogs"></i>
                    <span class="title">General Setting </span>
                </a>
            </li>

            <li class="nav-item  @if( request()->path() == 'admin/logo-icon'  ) active open @endif ">
                <a href="{{route('admin.logo-icon')}}" class="nav-link ">
                    <i class="fa fa-image"></i>
                    <span class="title">Logo & Icon </span>
                </a>
            </li>
            <li class="nav-item  @if( request()->path() == 'admin/header'  ) active open @endif ">
                <a href="{{route('admin.header')}}" class="nav-link ">
                    <i class="fa fa-header"></i>
                    <span class="title"> Header Section </span>
                </a>
            </li>
            <li class="nav-item  @if( request()->path() == 'admin/about-company'  ) active open @endif ">
                <a href="{{route('admin.about-company')}}" class="nav-link ">
                    <i class="fa fa-info-circle"></i>
                    <span class="title"> About Company </span>
                </a>
            </li>
            <li class="nav-item  @if( request()->path() == 'admin/product-quality'  ) active open @endif ">
                <a href="{{route('admin.product-quality')}}" class="nav-link ">
                    <i class="fa fa-info-circle"></i>
                    <span class="title"> Quality  </span>
                </a>
            </li>
            <li class="nav-item start 
            @if( request()->path() == 'admin/feature-header'  ) active open 
            @elseif( request()->path() == 'admin/features'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-info-circle"></i>
                    <span class="title"> Feature </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/feature-header'  ) active open @endif ">
                        <a href="{{route('admin.feature-header')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> Feature Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/features'  ) active open @endif ">
                        <a href="{{route('admin.features')}}" class="nav-link ">
                            <i class="fa fa-eye"></i>
                            <span class="title"> Feature Points </span>
                        </a>
                    </li>
                </ul>
            </li>

           
           
            <li class="nav-item  @if( request()->path() == 'admin/video'  ) active open @endif ">
                <a href="{{route('admin.video')}}" class="nav-link ">
                    <i class="fa fa-image"></i>
                    <span class="title"> Video Section </span>
                </a>
            </li>


            <li class="nav-item  @if( request()->path() == 'admin/achievements'  ) active open @endif ">
                <a href="{{route('admin.achievements')}}" class="nav-link ">
                    <i class="fa fa-trophy"></i>
                    <span class="title"> Achievements </span>
                </a>
            </li>


            <li class="nav-item  @if( request()->path() == 'admin/suitable-section'  ) active open @endif ">
                <a href="{{route('admin.suitable-section')}}" class="nav-link ">
                    <i class="fa fa-info-circle"></i>
                    <span class="title"> Suitable Section </span>
                </a>
            </li>


            <li class="nav-item start 
            @if( request()->path() == 'admin/app-header'  ) active open
            @elseif( request()->path() == 'admin/apps'  ) active open
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-file-image-o"></i>
                    <span class="title"> App </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/app-header'  ) active open @endif ">
                        <a href="{{route('admin.app-header')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> App Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/apps'  ) active open @endif ">
                        <a href="{{route('admin.apps')}}" class="nav-link ">
                            <i class="fa fa-file"></i>
                            <span class="title"> App Screen </span>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item start 
            @if( request()->path() == 'admin/subscriber-header'  ) active open
            @elseif( request()->path() == 'admin/subscribers'  ) active open
            @endif 
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title"> Subscriber </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/subscriber-header'  ) active open @endif ">
                        <a href="{{route('admin.subscriber-header')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> Subscriber Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/subscribers'  ) active open @endif ">
                        <a href="{{route('admin.subscribers')}}" class="nav-link " >
                            <i class="fa fa-mail-reply"></i>
                            <span class="title"> Subscribers </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item start 
            @if( request()->path() == 'admin/team-header'  ) active open 
            @elseif( request()->path() == 'admin/members'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title"> Team </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/team-header'  ) active open @endif ">
                        <a href="{{route('admin.team-header')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> Team Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/members'  ) active open @endif ">
                        <a href="{{route('admin.members')}}" class="nav-link ">
                            <i class="fa fa-eye"></i>
                            <span class="title"> View Team Member </span>
                        </a>
                    </li>
                </ul>
            </li>


            
            <li class="nav-item start 
            @if( request()->path() == 'admin/user-review'  ) active open 
            @elseif( request()->path() == 'admin/users-review'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title"> Users Review </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/user-review'  ) active open @endif ">
                        <a href="{{route('admin.user-review')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> Users Review Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/users-review'  ) active open @endif ">
                        <a href="{{route('admin.users-review')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title"> Users Review  </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item start 
            @if( request()->path() == 'admin/pricing-header'  ) active open 
            @elseif( request()->path() == 'admin/plans'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-money"></i>
                    <span class="title"> Pricing Plan </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                        <li class="nav-item @if( request()->path() == 'admin/pricing-header'  ) active open @endif ">
                                <a href="{{route('admin.pricing-header')}}" class="nav-link ">
                                    <i class="fa fa-header"></i>
                                    <span class="title">   Plan Header</span>
                                </a>
                            </li>
                    <li class="nav-item  @if( request()->path() == 'admin/plans'  ) active open @endif ">
                        <a href="{{route('admin.plans')}}" class="nav-link ">
                            <i class="fa fa-eye"></i>
                            <span class="title">  View  Plan </span>
                        </a>
                    </li>
                </ul>
            </li>



            <li class="nav-item start 
            @if( request()->path() == 'admin/question-header'  ) active open 
            @elseif( request()->path() == 'admin/questions'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-question-circle"></i>
                    <span class="title"> Question & Answer </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/question-header'  ) active open @endif ">
                        <a href="{{route('admin.question-header')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> Question Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/questions'  ) active open @endif ">
                        <a href="{{route('admin.questions')}}" class="nav-link ">
                            <i class="fa fa-question"></i>
                            <span class="title"> Question  </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item start 
            @if( request()->path() == 'admin/contact-header'  ) active open 
            @elseif( request()->path() == 'admin/contact'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title"> Contact </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/contact-header'  ) active open @endif ">
                        <a href="{{route('admin.contact-header')}}" class="nav-link ">
                            <i class="fa fa-header"></i>
                            <span class="title"> Contact Header </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/contact'  ) active open @endif ">
                        <a href="{{route('admin.contact')}}" class="nav-link ">
                            <i class="fa fa-mail-forward"></i>
                            <span class="title"> Contact Info </span>
                        </a>
                    </li>
                </ul>
            </li>

            
           

            <li class="nav-item  @if( request()->path() == 'admin/users-messages'  ) active open @endif ">
                    <a href="{{route('admin.users-messages')}}" class="nav-link ">
                        <i class="fa fa-comment"></i>
                        <span class="title"> User Messages </span>
                    </a>
                </li>
     
         
            <li class="nav-item start 
            @if( request()->path() == 'admin/footer-image'  ) active open 
            @elseif( request()->path() == 'admin/icons'  ) active open 
            @endif
            ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-close"></i>
                    <span class="title"> Footer </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if( request()->path() == 'admin/footer-image'  ) active open @endif ">
                        <a href="{{route('admin.footer-image')}}" class="nav-link ">
                            <i class="fa fa-file-image-o"></i>
                            <span class="title"> Footer Image </span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'admin/icons'  ) active open @endif ">
                        <a href="{{route('admin.icons')}}" class="nav-link ">
                            <i class="fa fa-image"></i>
                            <span class="title"> Social Icon  </span>
                        </a>
                    </li>
                </ul>
            </li>



        </ul>
    </div>
</div>