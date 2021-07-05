<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->title}}</td>
                <td>{{$user->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>