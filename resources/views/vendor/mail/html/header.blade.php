<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('storage/logo/test-logo.png') }}" height="80" width="100"
     id="logo" alt="App Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
