 <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{URL::to('/')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa far fa-graduation-cap  (alias)"></i>
            <span class="nav-link-text">Student</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                  <a class="fa fa-group" href="{{URL::to('/student')}}"> All student</a>
              </li>
            <li>
              <a class="fa fa-user-plus"  href="{{URL::to('/student/create')}}"> Add student</a>
            </li>
          </ul>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fas fa-book"></i>
            <span class="nav-link-text">Subject</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
              <li>
                  <a  class="fa fal fa-address-book" href="{{URL::to('/subject')}}"> All Subject</a>
              </li>
            <li>
              <a  class="fa far fa-ambulance"  href="{{URL::to('/subject/create')}}"> Add Subject </a>
            </li>
          </ul>
        </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
             <i class="fa fa-pencil-square"></i>
             <span class="nav-link-text">Examination</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents3">
             <li>
                 <a class="fa fal fa-book" href="{{URL::to('/exam')}}"> All Examination</a>
             </li>
             <li>
                 <a class="fa fas fa-edit" href="{{URL::to('/exam/create')}}"> Add Mark </a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
             <i class="fa fas fa-list-ol"></i>
             <span class="nav-link-text"> Mark</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents4">
             <li>
                 <a class="fa fa-bars"  href="{{URL::to('/mark')}}"> All Mark</a>
             </li>
             <li>
                 <a class="fa fa-bar-chart-o"  href="{{URL::to('/mark/create')}}"> Add Mark </a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
             <i class="fa fa-hand-pointer-o"></i>
             <span class="nav-link-text"> Attendance</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents5">
             <li>
                 <a class="fa fa-yelp"  href="{{URL::to('/attendance')}}"> All Attendance</a>
             </li>
             <li>
                 <a class="fa fa-hand-o-up "  href="{{URL::to('/attendance/create')}}"> Add Attendance </a>
             </li>
         </ul>
     </li>
     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
             <i class=" fa fas fa-user-circle"></i>
             <span class="nav-link-text"> Teacher</span>
         </a>
         <ul class="sidenav-second-level collapse" id="collapseComponents6">
             <li>
                 <a class="fa fas fa-users " href="{{URL::to('/teacher')}}"> All Teacher</a>
             </li>
             <li>
                 <a class="fa fa-user-plus"  href="{{URL::to('/teacher/create')}}"> Add Teacher</a>
             </li>
         </ul>
     </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents7" data-parent="#exampleAccordion">
            <i class="fa fas fa-plus-square"></i>
            <span class="nav-link-text">Addmission</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents7">
            <li>
              <a class="fa fas fa-asterisk"  href="{{URL::to('/admission')}}"> View Addmission list</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Developers</span>
          </a>
        </li>
      </ul>