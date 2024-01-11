
<!-- @if (Cookie::get('__gtm_campaign_url') !== false)
    <p>cookie is set</p>
@else
    <p>cookie isn't set</p>
@endif -->

<h1>Session Cleared</h1>
<br><br>
<b>Session Variable </b> {{ Session::get('purl') ?? $corpregister }}
