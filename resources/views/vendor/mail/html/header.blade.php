<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://getschiffy.com/static/resources/images/GetSchiffy-Logo.webp" class="logo" alt="Getschiffy Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
