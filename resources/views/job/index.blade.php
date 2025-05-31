<div>
    <h1>job interviews</h1>
    <h2>job keys </h2>
    @foreach ($jobs as $job)
    <div>{{ $job['title'] }} : {{ $job['Salary'] }}</div>
    
    @endforeach
</div>
