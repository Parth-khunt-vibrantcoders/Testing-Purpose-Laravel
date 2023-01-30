@php
$currentRoute = Route::current()->getName();
@endphp
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        @php
            $count = count($header['breadcrumb']);
            $temp = 1;
        @endphp
        @foreach($header['breadcrumb'] as $key => $value)
            @php
                $value = (empty($value)) ? 'javascript:;' : $value;
            @endphp
            @if($temp!=$count)
                <li>
                    <a href="{{ $value }}">
                        @if($temp == 1)
                            <i class="icon-home"></i> {{ $key }}
                        @else
                            {{ $key }}
                        @endif
                    </a>
                    <i class="fa fa-circle"></i>
                </li>
            @else
                <li>
                    <span>{{ $key }}</span>
                </li>
            @endif

            @php
                $temp = $temp+1;
            @endphp
        @endforeach
    </ul>
</div>
<!-- END PAGE BAR -->
