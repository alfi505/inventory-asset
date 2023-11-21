@foreach ($monitors as $item)
    <!-- Your HTML code to display details -->
    {{ $item->id_monitor }}
    {{ $item->nama_komputer }}
    <!-- Other details -->
@endforeach
