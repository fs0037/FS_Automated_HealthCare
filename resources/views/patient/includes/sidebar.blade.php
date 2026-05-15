<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <nav>
            <div class="navbar-title">
                <span>Main Navigation</span>
            </div>
            <ul class="main-navigation-menu">
                <li>
                    <a href="{{ route('patient.dashboard') }}">
                        <div class="item-content">
                            <div class="item-media"><i class="ti-home"></i></div>
                            <div class="item-inner"><span class="title"> Dashboard </span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('patient.book_appointment') }}">
                        <div class="item-content">
                            <div class="item-media"><i class="ti-pencil-alt"></i></div>
                            <div class="item-inner"><span class="title"> Book Appointment </span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="item-content">
                            <div class="item-media"><i class="ti-list"></i></div>
                            <div class="item-inner"><span class="title"> Appointment History </span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="item-content">
                            <div class="item-media"><i class="ti-list"></i></div>
                            <div class="item-inner"><span class="title"> Medical History </span></div>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>