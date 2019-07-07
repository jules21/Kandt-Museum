{{-- exhibition Theme : {{ $data['exhibition_title'] }} --}}
<p>
    Product Name: {{  $data['product_name'] }}
    </p>
    <p>
    Email: {{  $data['email'] }}
    </p>
    <p>
    product description: {{ $data['product_description'] }}
    </p>
    <p>
    AMOUNT: {{ $data['product_amount'] }}
    </p>
    <img src="data:image/png;base64,{{DNS2D::getBarcodePNG(json_encode($data, JSON_PRETTY_PRINT), 'QRCODE')}}" alt="barcode" />
    
    
    