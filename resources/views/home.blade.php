{{ auth()->check() ? 'Welcome '. auth()->user()->name : 'saya belom login' }}

<br>
<br>

{{auth()->check() ? auth()->user()->email : '-'}}

<br>
<br>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>
