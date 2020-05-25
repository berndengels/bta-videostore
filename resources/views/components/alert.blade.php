@php
    $uniqid = uniqid()
@endphp

<div id="{{ $uniqid }}" {{ $attributes->merge(['class' => 'alert alert-' . $type]) }}>
    {{ $message }}
</div>

<script>
    var $myid = $("#{{ $uniqid }}"),
        delay = 1,
        toDelay = 3000
    ;
    setTimeout(function(){
        const fade = { opacity: 0, transition: 'opacity ' + delay + 's' };
        $myid.css(fade).slideUp(delay * 1000);
    }, toDelay);
</script>
