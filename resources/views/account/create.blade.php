<form action="{{route('account.store')}}" method="post">

<input type="text" name="eur_in_account">

<button type="submit">Create Account</button>

@csrf
</form>