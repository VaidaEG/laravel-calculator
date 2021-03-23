<form action="{{route('account.update', $account)}}" method="post">

<input type="text" name="eur_in_account" value="{{$account -> eur}}">

<button type="submit">Edit Account</button>

@csrf
</form>