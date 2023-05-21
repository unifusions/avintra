@props(['file_type' => '', 'file_size' => ''])
<div>
    <span class="badge bg-primary mb-1"> {{ $file_type }}</span>
    @php
        if ($file_size == 0) {
            return '0.00 B';
        }
        $s = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        $e = floor(log($file_size, 1024));
        echo ' <span class="small">' . round($file_size / pow(1024, $e), 2) . ' ' . $s[$e] . '</span>';
    @endphp


</div>
