@extends('layouts.app')
@section('content')

<div class="container-fluid hotdog bg-light">
    @csrf
    <div class="container">

            <header>
                <h1>Styles Conference</h1>
                <h3>August 24&ndash;26th &mdash; Chicago, IL</h3>
            </header>
            <a href="http://shayhowe.com">Shay</a>
            <a href="/register">Register</a>
            <a href="/venue">Venue</a>
            <a href="/schedule">Schedule</a>


            <section>
                <section>
                    <h2>Dedicated to the Craft of Building Websites</h2>
                    <p class="para">Every year the brightest web designers and front-end developers descend on Chicago to discuss the latest technologies. Join us this August!</p>
                </section>
                <section>
                    <h5>Speakers</h5>
                    <h3>World-Class Speakers</h3>
                    <p>Joining us from all around the world are over twenty fantastic speakers, here to share their stories.</p>
                </section>
            </section>
            <footer>
                <small>&copy; Styles Conference</small>
            </footer>


        </div>
    </div>

    @endsection
