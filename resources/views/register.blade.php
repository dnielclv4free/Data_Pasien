<x-layout>
<form method="POST" action="{{route('auth.register')}}">
    @csrf
    <input type="name" placeholder "Name"/>
    <input type="email" placeholder="Email"/>
    <input type="password" placeholder="Password"/>
    <button type="submit">Submit</button>
</form>
</x-layout>
