<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inventory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>{{ $admin_name }}</h2>
            <div class="float-right"><a href='/logout'>Logout</a></div>
            <table class="table mb-1">
            <tr><td class="text-center"><h5><a href='/dashboard'>Dashboard</a></h5></td>
            <td class="text-center"><h5><a href="products/?id={{ auth()->user()->id }}&user={{ auth()->user()->name }}">Products</a></h5></td>
            <td class="text-center"><h3>Inventory</h3>total : {{$inventory_count}}</td></tr>
            </table>
            <form class="form-inline" method="GET">
            <div class="form-group mb-2">
                <!-- <label for="filter" class="col-sm-2 col-form-label">Filter</label> -->
                <input type="text" class="form-control" id="filter" name="filter" placeholder="Product name, id or SKU..." value="{{$filter}}">
                <!-- <input type="text" class="form-control" id="low" name="low" placeholder="quantity..." value="{{$low}}">    -->
            </div>
            <button type="submit" class="btn btn-default mb-2">Filter</button>
            </form>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Product #</th>
                        <th scope="col">name</th>
                        <th scope="col">sku</th>
                        <th scope="col">quantity</th>
                        <th scope="col">color</th>
                        <th scope="col">size</th>
                        <th scope="col">cost</th>
                        <th scope="col">price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventory as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->product_name }}</td>  
                        <td>{{ $data->sku }}</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ $data->color }}</td>
                        <td>{{ $data->size }}</td>
                        <td>${{ number_format($data->cost_cents/100, 2) }}</td>
                        <td>${{ number_format($data->price_cents/100, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $inventory->appends(['filter' => $filter, 'id' => $admin_id, 'user'=> $admin_name])->links() !!}
            </div>
        </div>
    </body>
</html>