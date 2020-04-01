<ul class="kt-menu__nav">

    <li class="kt-menu__item @yield('dashboard-active')" aria-haspopup="true">
        <a href="{{ route('dashboard') }}" class="kt-menu__link ">
            <i class="kt-menu__link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg>
            </i>
            <span class="kt-menu__link-text">Dashboard</span>
        </a>
    </li>

    <li class="kt-menu__item @yield('capture-active')" aria-haspopup="true">
        <a href="{{ route('capture') }}" class="kt-menu__link ">
            <i class="kt-menu__link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M16.3155516,16.1481997 C15.9540268,16.3503696 15.4970619,16.2211868 15.294892,15.859662 C15.0927222,15.4981371 15.2219049,15.0411723 15.5834298,14.8390024 C16.6045379,14.2679841 17.25,13.1909329 17.25,12 C17.25,10.8178416 16.614096,9.74756859 15.6048775,9.17309861 C15.2448979,8.96819005 15.1191879,8.51025767 15.3240965,8.15027801 C15.529005,7.79029835 15.9869374,7.66458838 16.3469171,7.86949694 C17.8200934,8.70806221 18.75,10.2731632 18.75,12 C18.75,13.7396897 17.8061594,15.3146305 16.3155516,16.1481997 Z M16.788778,19.8892305 C16.4155074,20.068791 15.9673493,19.9117581 15.7877887,19.5384876 C15.6082282,19.165217 15.7652611,18.7170589 16.1385317,18.5374983 C18.6312327,17.3383928 20.25,14.815239 20.25,12 C20.25,9.21171818 18.6622363,6.70862302 16.2061077,5.49544344 C15.8347279,5.31200421 15.682372,4.86223455 15.8658113,4.49085479 C16.0492505,4.11947504 16.4990201,3.96711914 16.8703999,4.15055837 C19.8335314,5.61416684 21.75,8.63546229 21.75,12 C21.75,15.3971108 19.7961591,18.4425397 16.788778,19.8892305 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M7,16 L3.60776773,15.3215535 C2.67291934,15.1345839 2,14.3137542 2,13.3603922 L2,10.6396078 C2,9.68624577 2.67291934,8.86541613 3.60776773,8.67844645 L7,8 L10.2928932,4.70710678 C10.6834175,4.31658249 11.3165825,4.31658249 11.7071068,4.70710678 C11.8946432,4.89464316 12,5.14899707 12,5.41421356 L12,18.5857864 C12,19.1380712 11.5522847,19.5857864 11,19.5857864 C10.7347835,19.5857864 10.4804296,19.4804296 10.2928932,19.2928932 L7,16 Z" fill="#000000"/>
                    </g>
                </svg>
            </i>
            <span class="kt-menu__link-text">Share Your Thoughts</span>
        </a>
    </li>

    <li class="kt-menu__item @yield('word-clouds-active')" aria-haspopup="true">
        <a href="{{ route('word-clouds') }}" class="kt-menu__link ">
            <i class="kt-menu__link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M5.74714567,17.0425758 C4.09410362,15.9740356 3,14.1147886 3,12 C3,8.6862915 5.6862915,6 9,6 C11.7957591,6 14.1449096,7.91215918 14.8109738,10.5 L17.25,10.5 C19.3210678,10.5 21,12.1789322 21,14.25 C21,16.3210678 19.3210678,18 17.25,18 L8.25,18 C7.28817895,18 6.41093178,17.6378962 5.74714567,17.0425758 Z" fill="#000000"/>
                    </g>
                </svg>
            </i>
            <span class="kt-menu__link-text">Word Clouds</span>
        </a>
    </li>

    <li class="kt-menu__item @yield('profile-active')" aria-haspopup="true">
        <a href="{{ route('profile') }}" class="kt-menu__link ">
            <i class="kt-menu__link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                    </g>
                </svg>
            </i>
            <span class="kt-menu__link-text">My Profile</span>
        </a>
    </li>

</ul>

