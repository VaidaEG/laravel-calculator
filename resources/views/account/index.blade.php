<ul>
@foreach($accounts as $account)
    <li>ID: {{$account -> id}} Eur in account: {{$account -> eur}}
    <a href="{{route('account.edit', $account)}}">EDIT</a>
    <a href="{{route('account.add', $account)}}">ADD</a>
    <form action={{route('account.destroy', $account)}} method="post">
    <button type="submit">DELETE</button>
     @csrf
    </form>
    </li>
@endforeach
</ul>