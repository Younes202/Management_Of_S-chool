<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ url('/dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Tableau de bord</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Programme  gestion des écoles  (Younes Sghyer)</li>

                    <!-- Grades-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-text">Cycles</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Grades.index')}}">Liste des Cycles</a></li>
                        </ul>
                    </li>
                    <!-- classes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">Niveaux Scolaire</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Classrooms.index')}}">Liste des Niveaux </a></li>
                        </ul>
                    </li>


                    <!-- sections-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span
                                    class="right-nav-text">Les Classes</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Sections.index')}}">Liste des Classes</a></li>
                        </ul>
                    </li>


                    <!-- students-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu">
                            <div class="pull-left"><i class="fas fa-user-graduate"></i></i></i><span
                                    class="right-nav-text">Les étudiants</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="students-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Students.create')}}">Ajouter un Etudiant </a> </li>
                            <li> <a href="{{route('Students.index')}}">Liste des Etudiants </a> </li>
                        </ul>
                    </li>



                    <!-- Teachers-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span
                                    class="right-nav-text">Les professeurs</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Teachers.index')}}">liste des enseignants  </a> </li>
                            <li> <a href="{{route('Teachers.create')}}">Ajouter des Professeurs  </a> </li>

                        </ul>
                    </li>


                    <!-- Parents-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Parents-menu">
                            <div class="pull-left"><i class="fas fa-user-tie"></i><span
                                    class="right-nav-text">Parents</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Parents-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{url('add_parent')}}"> Liste des parents </a> </li>
                            

                        </ul>
                    </li>
                   
                   
                    <!-- Subjects -->


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">Les Matières Scolaires</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('subjects.create')}}">Ajouter des Matières</a> </li>
                            <li> <a href="{{route('subjects.index')}}">Liste des Matières</a> </li>

                        </ul>
                    </li>
                   


 <!-- Exams-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">Les Exams</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">
				 <li> <a href="{{route('Exams.create')}}">Ajouter des Exams</a></li>
                            <li> <a href="{{route('Exams.index')}}">List des Exams</a></li>
			    
                        </ul>
                    </li>

	<!-- Quizzes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Quizzes-icon">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">Quizzes</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Quizzes-icon" class="collapse" data-parent="#sidebarnav">
			   
				  <li> <a href="{{route('Quizzes.create')}}">Ajouter un Quizze </a> </li>
			  <li> <a href="{{route('Quizzes.index')}}">Liste des Quizzes </a> </li>
			 
		      
                        </ul>
                    </li>

		<!-- Questions -->
		
			
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Questions-icon">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">Questions</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Questions-icon" class="collapse" data-parent="#sidebarnav">
			   
				  <li> <a href="{{route('questions.create')}}">Ajouter un Question </a> </li>
			  <li> <a href="{{route('questions.index')}}">Liste des Questions </a> </li>
			 
		      
                        </ul>
                    </li>

		
		<!-- Attendance-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                            <div class="pull-left"><i class="fas fa-calendar-alt"></i><span class="right-nav-text">Absences</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Attendance.index')}}">Liste des classes</a> </li>
				
                        </ul>
                    </li>

	
	
                    <!-- library-->



                    <!-- Onlinec lasses-->



                    <!-- Settings-->



                    <!-- Users-->


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
