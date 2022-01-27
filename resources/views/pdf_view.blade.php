<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{asset('public')}}/css/app.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Report For Insurance Policies Applied</h2>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Policy</th>
                    <th scope="col">Initial Date</th>
                    <th scope="col">Expiring Date</th>
                    <th scope="col">Adults</th>
                    <th scope="col">Children</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->room_id }}</td>
                    <td>{{ $data->checkin_date }}</td>
                    <td>{{ $data->checkout_date }}</td>
                    <td>{{ $data->total_adults }}</td>
                    <td>{{ $data->total_children }}</td>
                    <td>{{ $data->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script src="{{asset('public')}}/js/app.js" type="text/js"></script>
</body>

</html>