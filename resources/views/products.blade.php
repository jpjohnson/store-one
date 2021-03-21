<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>{{ $admin_name }}</h2>
            <div class="float-right"><a href='/logout'>Logout</a></div>
            <table class="table mb-1">
            <tr><td class="text-center"><h5><a href='/dashboard'>Dashboard</a></h5></td>
            <td class="text-center"><h3>Products</h3>total : {{$product_count}}</td>
            <td class="text-center"><h5><a href="/inventory">Inventory</a></h5></td></tr>
            </table>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">style</th>
                        <th scope="col">brand</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->product_name }}</td>  
                        <td>{{ $data->style }}</td>
                        <td>{{ $data->brand }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $products->appends(['id' => $admin_id, 'user'=> $admin_name])->links() !!}
            </div>
        </div>
    </body>
</html>