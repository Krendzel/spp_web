<pre>
{{ dd($login_prints) }}

</pre>
@foreach($login_prints as $login_print)
    {{ $login_print->id }}
    {{ $login_print->first_name }}
    {{ $login_print->last_name }}

    @endforeach

