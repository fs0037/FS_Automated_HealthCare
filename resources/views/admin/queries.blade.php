<div class="container">
    <h2>Contact Queries / Messages</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($queries as $query)
            <tr>
                <td>{{ $query->fullname }}</td>
                <td>{{ $query->emailid }}</td>
                <td>{{ $query->mobileno }}</td>
                <td>{{ $query->description }}</td>
                <td>{{ $query->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>