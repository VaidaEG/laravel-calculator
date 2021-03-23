<form action="{{route('account.add_to_account', $account)}}" method="post">

<input type="text" name="add" value="0">

<button type="submit">Add to Account</button>

@csrf
</form>