<form action="{{route('account.update', $account)}}" method="post">

<p>In this account: {{$account -> eur}} Eur. You can change it in the input field.</p>

<input type="text" name="eur_in_account" value="{{$account -> eur}}">

<button type="submit">Edit Account</button>

@csrf
</form>