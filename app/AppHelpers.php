<?php
use Illuminate\Support\Facades\Auth;


// Get user's id
if (!function_exists('getCurrentUser')) {
    function getCurrentUser()
    {
     $userId = Auth::id();
     
     return $userId;
    }
}

// Extract initials from user's name
if (!function_exists('getUserInitial')) {
    function getUserInitial()
    {
     $user = auth()->user();
   if ($user) {  
     $name = $user->name;
    $initials = [];

        $nameParts = explode(' ', trim($name));
        $firstName = array_shift($nameParts);
        $lastName = array_pop($nameParts);
        $initials[$name] = (
            mb_substr($firstName,0,1) .
            mb_substr($lastName,0,1)
        );

     $initials = implode('', $initials);
     return $initials;
        } else {
            return redirect('login');
        }
    }
}

// Get user's name
if (!function_exists('getUserName')) {
    function getUserName()
    {
     $user = auth()->user();
   if ($user) {  
     $name = $user->name;
     return $name;
        } else {
            return redirect('login');
        }
    }
}

// Get user's firstname
if (!function_exists('getUserFisrtName')) {
    function getUserFisrtName()
    {
     $user = auth()->user();
     $name = $user->name;
     $nameParts = explode(" ", $name);
     $firstName = $nameParts[0];
     return $firstName;
    }
}
// Get slides
if (!function_exists('getSlides')) {
    function getSlides()
    {
     $slides = App\Models\HeroSection::all()->sortBy('order');
     
     return $slides;
    }
}
// Get About summary
if (!function_exists('getAboutSummary')) {
    function getAboutSummary()
    {
     $about_sum = App\Models\AboutSummary::all();
     
     return $about_sum;
    }
}