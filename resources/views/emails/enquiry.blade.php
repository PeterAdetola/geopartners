<x-mail::message>
# Hi Geo, you have a new enquiry

<h3>Name: {{ $data['name'] }}</h3>
<h3>Phone: {{ $data['phone'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Subject: {{ $data['subject'] }}</h3>
<p>Message: {{ $data['message'] }}</p>

<x-mail::button :url="'www.geopartnersintl.com'">
Visit our website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
