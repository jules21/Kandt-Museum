exhibition Theme : {{ $data['exhibition_title'] }}
<p>
Name: {{  $data['names'] }}
</p>
<p>
Email: {{  $data['email'] }}
</p>
<p>
Message: {{ $data['exhibition_description'] }}
</p>
<img src="data:image/png;base64,{{DNS2D::getBarcodePNG(json_encode($data, JSON_PRETTY_PRINT), 'QRCODE')}}" alt="barcode" />
