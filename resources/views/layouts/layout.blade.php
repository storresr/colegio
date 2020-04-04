<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style.css">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
 

</head>

<body id="page-top">
  

  <!-- Page Wrapper -->
  <div id="wrapper">
    

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">Colegio <sup>7</sup> de Agosto</div>
      </a>

     
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Estudiantes
      </div>
         <!-- Nav Item - Estudiantes Collapse Menu -->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              
              <span>Estudiantes</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                
                <a class="collapse-item" href="{{url('estudiantes/nuevo')}}">Crear estudiantes</a>
                <a class="collapse-item" href="{{url('estudiantes')}}">Listar estudiantes</a>
                <a class="collapse-item" href="{{url('registrarestudiantes/nuevo')}}">Registrar estudiante</a>
                <a class="collapse-item" href="{{url('registrarestudiantes')}}">Listado de matriculas</a>
                
              </div>
            </div>
          </li>

      <!-- Nav Item - Acudientes Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          
          <span>Acudientes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{url('acudientes/nuevo')}}">Crear acudientes</a>
            <a class="collapse-item" href="{{url('acudientes')}}">Listar acudientes</a>
          </div>
        </div>
      </li>
      
           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
             Docente
           </div>
              <!-- Nav Item - Docente Collapse Menu -->
              <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                   
                   <span>Docente</span>
                 </a>
                 <div id="collapse3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                   <div class="bg-white py-2 collapse-inner rounded">
                     
                     <a class="collapse-item" href="{{url('docentes/nuevo')}}">Crear docentes</a>
                     <a class="collapse-item" href="{{url('docentes')}}">Listar docentes</a>
                   </div>
                 </div>
               </li>
   

                     <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
             Asignaturas
           </div>
              <!-- Nav Item - Materias Collapse Menu -->
              <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                   
                   <span>Materias</span>
                 </a>
                 <div id="collapse4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                   <div class="bg-white py-2 collapse-inner rounded">
                     
                     <a class="collapse-item" href="{{url('asignaturas/nuevo')}}">Crear materias</a>
                     <a class="collapse-item" href="{{url('asignaturas')}}">Listar materias</a>
                   </div>
                 </div>
               </li>

                 <!-- Nav Item - Horario Collapse Menu -->
              <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    
                    <span>Horario</span>
                  </a>
                  <div id="collapse5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                      <a class="collapse-item" href="{{url('horarios/nuevo')}}">Crear horarios</a>
                      <a class="collapse-item" href="{{url('horarios')}}">Listar horarios</a>
                    </div>
                  </div>
                </li>

      

    </ul>
    <!-- End of Sidebar -->
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Topbar -->
     
      <!-- End of Topbar -->

      <!-- Main Content -->
      <div class="container mt-5 col-12">

        @yield('content')

        <!-- Footer -->
      </div>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>



</html>