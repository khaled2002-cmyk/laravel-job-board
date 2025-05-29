<div>
    <h1>job interviews</h1>
    @foreach ($jobs as $job)
    <div>{{ $job['title'] }} : {{ $job['Salary'] }}</div>
    
    @endforeach
</div>
