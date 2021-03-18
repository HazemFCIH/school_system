<script>
    if(!localStorage.hasOwnProperty("admin_token")){
      window.location.replace("/");
    }
 </script>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
       -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Bayan School System
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('students')}}">
              <i class="material-icons">person</i>
              <p>Students</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('rooms')}}">
              <i class="material-icons">content_paste</i>
              <p>rooms</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('teachers')}}">
              <i class="material-icons">library_books</i>
              <p>Teachers</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  