<!-- TS15054630242707: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> 
<div class="row">
   <!-- Profile Info and Notifications --> 
   <div class="col-md-6 col-sm-8 clearfix">
      <ul class="user-info pull-left pull-none-xsm">
         <!-- Profile Info --> 
         <li class="profile-info dropdown">
            <!-- add class "pull-right" if you want to place this from right --> 
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{asset('images/profile_pictures/sam.jpg')}}" alt="" class="img-circle" width="44" />
            Sam Khoo
            </a> 
            <ul class="dropdown-menu">
               <!-- Reverse Caret --> 
               <li class="caret"></li>
               <!-- Profile sub-links --> 
               <li> <a href="extra/timeline/index.html"> <i class="fa fa-user"></i>
                  Edit Profile
                  </a> 
               </li>
               <li> <a href="index.html#"> <i class="fa fa-clipboard"></i>
                  Tasks
                  </a> 
               </li>
            </ul>
         </li>
      </ul>
      <ul class="user-info pull-left pull-right-xs pull-none-xsm">
         <!-- Raw Notifications --> 
         <li class="notifications dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
               <i class="fa fa-bell-o"></i> 
               {{-- TODO: If got notifications enable this --}}
               <span class="badge badge-danger">3</span></a> 


            {{-- TODO : dynamic notifications section --}}
            <ul class="dropdown-menu">
               <li class="top">
                  <p class="small"> 
                     <a href="index.html#" class="pull-right">Mark all Read</a>
                     You have <strong>3</strong> new notifications.
                  </p>
               </li>
               <li>
                  <ul class="dropdown-menu-list scroller">
                     <li class="unread notification-success"> <a href="index.html#"> <i class="entypo-user-add pull-right"></i> <span class="line"> <strong>New user registered</strong> </span> <span class="line small">
                        30 seconds ago
                        </span> </a> 
                     </li>
                     <li class="unread notification-secondary"> <a href="index.html#"> <i class="entypo-heart pull-right"></i> <span class="line"> <strong>Someone special liked this</strong> </span> <span class="line small">
                        2 minutes ago
                        </span> </a> 
                     </li>
                     <li class="notification-primary"> <a href="index.html#"> <i class="entypo-user pull-right"></i> <span class="line"> <strong>Privacy settings have been changed</strong> </span> <span class="line small">
                        3 hours ago
                        </span> </a> 
                     </li>
                     <li class="notification-danger"> <a href="index.html#"> <i class="entypo-cancel-circled pull-right"></i> <span class="line">
                        John cancelled the event
                        </span> <span class="line small">
                        9 hours ago
                        </span> </a> 
                     </li>
                     <li class="notification-info"> <a href="index.html#"> <i class="entypo-info pull-right"></i> <span class="line">
                        The server is status is stable
                        </span> <span class="line small">
                        yesterday at 10:30am
                        </span> </a> 
                     </li>
                     <li class="notification-warning"> <a href="index.html#"> <i class="entypo-rss pull-right"></i> <span class="line">
                        New comments waiting approval
                        </span> <span class="line small">
                        last week
                        </span> </a> 
                     </li>
                  </ul>
               </li>
               <li class="external"> <a href="index.html#">View all notifications</a> </li>
            </ul>
         </li>
         

         <!-- Task Notifications --> 
         <li class="notifications dropdown">

            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
               <i class="fa fa-file-text-o"></i> 
               {{-- TODO: if got tasks, enable this for notifications --}}
               <span class="badge badge-success">6</span> 

            </a> 

            {{-- TODO: dynamic tasks section --}}
            <ul class="dropdown-menu">
               <li class="top">
                  <p>You have 6 pending tasks</p>
               </li>
               <li>
                  <ul class="dropdown-menu-list scroller">
                     <li> <a href="index.html#"> <span class="task"> <span class="desc">Procurement</span> <span class="percent">27%</span> </span> <span class="progress"> <span style="width: 27%;" class="progress-bar progress-bar-success"> <span class="sr-only">27% Complete</span> </span> </span> </a> </li>
                     <li> <a href="index.html#"> <span class="task"> <span class="desc">App Development</span> <span class="percent">83%</span> </span> <span class="progress progress-striped"> <span style="width: 83%;" class="progress-bar progress-bar-danger"> <span class="sr-only">83% Complete</span> </span> </span> </a> </li>
                     <li> <a href="index.html#"> <span class="task"> <span class="desc">HTML Slicing</span> <span class="percent">91%</span> </span> <span class="progress"> <span style="width: 91%;" class="progress-bar progress-bar-success"> <span class="sr-only">91% Complete</span> </span> </span> </a> </li>
                     <li> <a href="index.html#"> <span class="task"> <span class="desc">Database Repair</span> <span class="percent">12%</span> </span> <span class="progress progress-striped"> <span style="width: 12%;" class="progress-bar progress-bar-warning"> <span class="sr-only">12% Complete</span> </span> </span> </a> </li>
                     <li> <a href="index.html#"> <span class="task"> <span class="desc">Backup Create Progress</span> <span class="percent">54%</span> </span> <span class="progress progress-striped"> <span style="width: 54%;" class="progress-bar progress-bar-info"> <span class="sr-only">54% Complete</span> </span> </span> </a> </li>
                     <li> <a href="index.html#"> <span class="task"> <span class="desc">Upgrade Progress</span> <span class="percent">17%</span> </span> <span class="progress progress-striped"> <span style="width: 17%;" class="progress-bar progress-bar-important"> <span class="sr-only">17% Complete</span> </span> </span> </a> </li>
                  </ul>
               </li>
               <li class="external"> <a href="index.html#">See all tasks</a> </li>
            </ul>



         </li>
      </ul>
   </div>
   <!-- Raw Links --> 
   <div class="col-md-6 col-sm-4 clearfix hidden-xs">
      <ul class="list-inline links-list pull-right">
         <li class="dropdown language-selector">
            Language: &nbsp;
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"> <img src="{{asset('images/flags/flag-uk.png')}}" width="16" height="16" /> </a> 
            <ul class="dropdown-menu pull-right">
               <li class="active"> <a href="index.html#"> <img src="{{asset('images/flags/flag-uk.png')}}" width="16" height="16" /> <span>English</span> </a> </li>
            </ul>
         </li>       
         <li class="sep" style="border-left: 1px solid #bbbbbb"></li>

         {{-- Logout Button --}}
         <li> <a href="extra/login/index.html">
            Log Out &nbsp;<i class="fa fa-sign-out"></i> </a>&nbsp; 
         </li>


      </ul>
   </div>
</div>
<hr style="border-top: 1px solid #e2e2e2; margin-top: 10px;">
