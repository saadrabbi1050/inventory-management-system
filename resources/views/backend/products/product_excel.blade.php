
<h5 style="text-align:center">Report On Products</h5>
<table>
    <thead>
      <tr>
            <th scope="col">Ser No</th>
            <th scope="col">Name</th>
            <th>Category Name</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Image</th>
            <th scope="col">Box Name</th>
            <th scope="col">Supplier Name</th>
            <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>

      @php
        $sl = 1;
      @endphp
      
      @foreach ($products as $product)
          <tr>
          <th scope="row"> {{ $sl++ }} </th>
                            <td>{{ $product->name ?? '' }}</td>
                            <td> {{ $product->category->name ?? ' '}}</td>
                            <td>{{ $product->price ?? 'No Price Setup' }}</td>
                            <td> {{ $product->qty ?? ' '}}</td>




                            <td>

                              @if(file_exists(storage_path().'/app/public/products/'.$product->image ))

                              <img src="{{ asset('storage/products/'.$product->image) }}" height="100">

                              @else
                               Image NAI
                              @endif

                            </td>
                            <td> {{$product->box->name ?? ' '}}</td>
                            <td> {{$product->supplier->name ?? ' '}}</td>
                            <td>{{$product->description ?? ' '}}</td>
          </tr>
      @endforeach

        
    </tbody>
  </table>