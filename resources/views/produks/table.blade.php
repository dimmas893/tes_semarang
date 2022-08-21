<x-app-layout>
     <div class="section-header">
        <h1>Data Masyarakat</h1>
    </div>
            
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>item</th>
                          <th>weight</th>
                          <th>sku</th>
                          <th>price_sell</th>
                          <th>price_promo</th>
                          <th>price_agent</th>
                          <th>Photo</th>
                          <th>ordering</th>
                          <th>status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($produks as $produk) 
                        <tr>
                            <td>1</td>              
                            <td>{{ $produk->product_name }}</td>
                            <td>{{ $produk->Type }}</td> 
                            <td>{{ $produk->item }}</td> 
                            <td>{{ $produk->weight }}</td> 
                            <td>{{ $produk->sku }}</td> 
                            <td>{{ $produk->price_sell }}</td> 
                            <td>{{ $produk->price_promo }}</td> 
                            <td>{{ $produk->price_agent }}</td> 
                            <td>{{ $produk->Photo }}</td> 
                            <td>{{ $produk->ordering }}</td> 
                            <td>{{ $produk->status }}</td> 
                            <td>
                            </td>           
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
</x-app-layout>