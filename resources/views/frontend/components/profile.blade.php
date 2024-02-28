<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - ChildCareShop</title>
</head>
<body>
    <div style="max-width: 400px; margin: 0 auto; padding: 20px; text-align: center; font-family: Arial, sans-serif;">
        <img src="https://via.placeholder.com/150" alt="User's Profile Picture" style="border-radius: 50%; width: 150px; height: 150px; border: 5px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
        <h2 style="margin: 10px 0;">{{ auth()->user()->name }}</h2>
        <p style="color: #777;">Joined: {{ auth()->user()->created_at->diffForHumans() }}</p>

        <ul style="list-style: none; padding: 0; text-align: left;">
            <form action="logout.php" method="post">

            <li>
                <strong>Address: </strong> {{ auth()->user()->address }}<br>

            </li>
            <li>
                <strong>Phone: </strong>{{ auth()->user()->phone }}<br>

            </li>
            <li>
                <strong>Email: </strong>{{ auth()->user()->email }}<br>

            </li>
            {{-- <button type="submit" style="background-color: #ff5733; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button> --}}
        </form>
        </ul><br><br>

        <!-- Order History -->
       
        @foreach ($order as $item)
<P>Order History</P>

        <ul style="list-style: none; padding: 0; text-align: left;">
            <li>
                <strong style="color: blue;">Product Name -</strong> - {{ $item->product->name }}<br>
                <strong style="color: blue;">Order id: #{{ $item->amount }}{{ $item->id }}67890</strong><br>Price - BDT {{ $item->amount }}<br>
                <span style="color: blue;">Placed on: {{ $item->created_at }}</span><br>
                <strong style="color: blue;">Transaction No</strong> - {{ $item->transaction_id }}<br>
            </li>
            <p style="color: blue;">Order Status -<small style="color: blue;">{{ $item->status }}</small></p>
            
       
        </ul> <hr>
        @endforeach

        <!-- Logout Button -->

    </div>
</body>
</html>
