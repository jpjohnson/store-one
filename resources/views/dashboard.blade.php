<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

        <body>
        <div class="container mt-5">
        <h2>Dashboard</h2>
        <h3>Hi {{ auth()->user()->name }}</h3>
        <div class="float-right"><a href='/logout'>Logout</a></div>
        
        <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col"><a href="/products"><h2>Products</h2></a></th>
                        <th scope="col"><a href="/inventory"><h2>Inventory</h2></a></th>
                        <th scope="col"><h2>Orders</h2></th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                        <td scope="row">{{ $product_count }}</td>
                        <td scope="row">{{ $inventory_count }}</td>  
                        <td scope="row">{{ $order_count }}</td>  
                    </tr>
                </tbody>
            </table>
            </div>
        </body>
</html>