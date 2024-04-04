@extends('frontend.main_master')
@section('main')
@php
$contact = App\Models\Contact::limit(1)->get();
$separators = ",|-|_|\n";
if (Session::has('message') ) {
    $msg = Session::get('message');
} else {
    $msg = 'Message not sent';
}
@endphp

            <!-- Contact -->
            <section class="section-padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                            <h2 class="section-title">Contact <span>Us</span></h2>
                        </div>
                    </div>
                    <div class="row mb-90">
                        <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                            <p><b>Geosunny & Partners Limited</b></p>
                            <p>For strong and the state of the art structures in your residence, environment and even interior, we got you always</p>
                            <!-- <p>@php echo $msg @endphp</p> -->
                        </div>
    @if(count($contact) > 0)
                        <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
    @foreach($contact as $contact)
                            <p><b>Contact Details</b></p>
            @php
                $phone = $contact->phone;
                $phones = explode('<br>', $phone);
                $i = 1;
            @endphp
                            <p>
                            @foreach($phones as $phone)
                                <b>Phone {{$i++}}:</b>&nbsp;&nbsp;<a href="tel:+{{ preg_replace('/\D/', '', $phone) }}">{{ strip_tags($phone) }}</a><br>
                            @endforeach
                            </p>
            @php
                $email = $contact->email;
                $emails = preg_split("#(?<=$separators)#", $email);
                $i = 1; 
            @endphp 
                            <p>
                        @foreach($emails as $email)
                            <b>Email {{$i++}}:</b>&nbsp;&nbsp;<a href="mailto:{{ strip_tags($email) }}">{{ strip_tags($email) }}</a><br>
                        @endforeach
                            </p>
                    @if($contact->address)
                            <p><b>Address :</b>&nbsp;&nbsp; {{ $contact->address }}</p>
                    @endif
    @endforeach
                        </div>
    @endif
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <p><b>Contact Form</b></p>
                            
@if (session()->has('success'))
    <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
        <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
            <div class="text-green-500" dark:text-gray-500>
                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-sm font-medium ml-3">Success!.</div>
        </div>
        <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
        <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </div>
    </div>
@endif
                            <form method="post" class="contact__form" action="{{ route('send.enquiry') }}">
                            @csrf
                            <!-- Form message -->
                    <div class="row">
                        <div class="col-12">
                            <div id="msg" class="alert alert-success contact__msg" style="display: none;" role="alert">
                                {{ $msg }}
                            </div>
                        </div>
                    </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit"  value="Send Message">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- Map Section -->
                    <!-- <div class="row">
                        <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13419.040333881774!2d-79.93218134282569!3d32.77209999120473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a1ae84ff639%3A0xe5c782f71924a526!2s24%20King%20St%2C%20Charleston%2C%20SC%2029401%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1635894790855!5m2!1str!2str" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
                        </div>
                    </div> -->
                </div>
            </section>
<script>
@if(Session::has('message'))
  document.getElementById("msg").style.display = "block";
@endif
</script>
@endsection