{{-- for js --}}
{{--
<div 
  class="instagram js-instagram"
  data-limit="6"
  data-userid=""
  data-clientid=""
  data-token="">
</div>
--}}

{{-- for php --}}
@include('partials.comps.instagram', [
  'props' => App\Transform\Presets\FieldInstagram::get($block->username),
])
