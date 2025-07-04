<x-layout>
<form method="POST" action="{{route('auth.login')}}">
    @csrf
    <input type="email" placeholder="Email"/>
    <input type="password" placeholder="Password"/>
    <button type="submit">Submit</button>
</form>
<p>Tidak punya akun? </p><br>
<p><a href={{route('register')}}>klik disini</a></p>
</x-layout>
