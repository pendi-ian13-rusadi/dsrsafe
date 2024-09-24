<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('gpt') }}">
            <i class="bi bi-chat-dots-fill"></i>
                <span>DSRS On GPT</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('trans') }}">
                <i class="bi bi-hdd-stack-fill"></i>
                <span>DSRS Database</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('trans_input') }}">
                <i class="bi bi-clipboard-plus"></i>
                <span>Input New Form</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
        

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('faq') }}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

      
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('contact') }}">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->
       
    </ul>

</aside><!-- End Sidebar-->
