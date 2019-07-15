<form class="{{ $formClass }}" action="{{ route($formAction) }}" method="{{ $formMethod }}" enctype="multipart/form-data">
  {{ $slot }}
</form>
