@extends('layouts.app')

@section('title', 'Details')

@section('content')
    <h1>My Goals</h1>

    <div class="bg-light bg-gradient rounded p-3 mt-2 mb-2">
        
        <!-- School-Related Goals -->
        <div class="accordion" id="school">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        School-Related Goals
                    </button>
                </h2>
                <div  id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#school">
                    <div class="bg-white p-3">
                        <p>This Semester<p>
                        <ul class="list-group mt-3 mb-4">
                            <li class="list-group-item"><small>Master Laravel</small></li>
                            <li class="list-group-item"><small>Become better at designing websites</small></li>
                            <li class="list-group-item"><small>Create beautiful designs for each Laboratory exercise in WAD2</small></li>
                            <li class="list-group-item"><small>Earn good grades</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- General Goals -->
        <div class="accordion mt-2" id="general">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        General Goals
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#general">
                    <div class="accordion-body">
                        <ul class="list-group mt-3 mb-4">
                            <li class="list-group-item"><small>Become successful in life together with my family</small></li>
                            <li class="list-group-item"><small>Have a career related to my course, preferably a stable and manageable job</small></li>
                            <li class="list-group-item"><small>Support MCGI’s good works by volunteering, donating (once I become successful ofc), and using the skills I gained in LV</small></li>
                            <li class="list-group-item"><small>Have enough money to provide for our needs, some wants, and help reduce financial worries for my family</small></li>
                            <li class="list-group-item"><small>Own a house since we are currently renting</small></li>
                            <li class="list-group-item"><small>Live peacefully with my family, friends, and the people who care about me</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <h1>Contacts</h1>

    <ul class="list-group mt-2 mb-5">
        <li class="list-group-item">LV Email: ydreyann.ramirez@student.laverdad.edu.ph</li>
        <li class="list-group-item">FB Account: <a href="https://www.facebook.com/ydreyann.ramirez" target="_blank" rel="noopener noreferrer">Ydrey Ann Ramirez</a></li>
        <li class="list-group-item">IG Account: <a href="https://www.instagram.com/ydrey123/" target="_blank" rel="noopener noreferrer">Ydrey123</a></li>
    </ul>
@endsection