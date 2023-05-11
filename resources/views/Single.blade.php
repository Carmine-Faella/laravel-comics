@extends('layout.app')

@section('page-title', 'Single Page')

@section('content')
    <div class="bg-primary line">
    </div>

    <div class="cnt_single">
        <h2>Action Comics #1000: The Deluxe Edition</h2>
        <div>
            <div>$19.99 <span>AVAIABLE</span></div>
            <div>
                <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Check Avaiability
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
            </div>
        </div>
        <img src="https://static.dc.com/dc/files/default_images/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?w=250" alt="Superman">
    </div>

    
    <div>

        <div>
            <h2>Talent</h2>
            <h6>Art By:</h6>
            <p>"José Luis García-López",
            "Clay Mann",
            "Rafael Albuquerque",
            "Patrick Gleason",
            "Dan Jurgens",
            "Joe Shuster",
            "Neal Adams",
            "Curt Swan",
            "John Cassaday",
            "Olivier Coipel",
            "Jim Lee"</p>
            <h6>Written By:</h6>
            <p>"Brad Meltzer",
            "Tom King",
            "Scott Snyder",
            "Geoff Johns",
            "Brian Michael Bendis",
            "Paul Dini",
            "Louise Simonson",
            "Richard Donner",
            "Marv Wolfman",
            "Peter J. Tomasi",
            "Dan Jurgens",
            "Jerry Siegel",
            "Paul Levitz"</p>
        </div>
        <div>
            <h2>Specs</h2>
            <div>
                <h6>Series</h6>
                <div><a href="#">ACTION COMICS</a></div>
            </div>
            <div>
                <h6>U.S. Price</h6>
                <div>$19.99</div>
            </div>
            <div>
                <h6>On Sale Date</h6>
                <div>Oct 02 2018</div>
            </div>
            
        </div>
    </div>
@endsection