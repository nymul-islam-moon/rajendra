<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="workout-statistic.html">Workout Statistic</a></li>
                    <li><a href="workoutplan.html">Workout Plan</a></li>
                    <li><a href="distance-map.html">Distance Map</a></li>
                    <li><a href="food-menu.html">Diet Food Menu</a></li>
                    <li><a href="personal-record.html">Personal Record</a></li>
                </ul>
            </li> --}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Room</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.roomcategory.index') }}">Room Category</a></li>
                    <li><a href="{{ route('dashboard.room.index') }}">Rooms</a></li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Special Offer</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard.specialOffer.index') }}">Special Offer</a></li>
                </ul>
            </li>


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">Book Requests</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="">Book Requests</a></li>
            </ul>
        </li>

            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Expense</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Card</a></li>
                    <li><a href="">Cash</a></li>
                    <li><a href="">Mobile Bank</a></li>
                </ul>
            </li> --}}
            {{-- <li class="">
                <a href="" class="ai-icon mm-active" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Treasure</span>
                </a>
            </li> --}}
            {{-- <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">System</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Mobile Bank</a></li>
                    <li><a href="">Card</a></li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
