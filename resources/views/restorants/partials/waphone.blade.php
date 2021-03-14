<br />
<h6 class="heading-small text-muted mb-4">{{ __('Número do Whatsapp') }}</h6>
<!-- Payment explanation and Mollie payments -->
@include('partials.fields',['fields'=>[
    ['required'=>false,'ftype'=>'input','name'=>'Número do Whatsapp', 'placeholder'=>'Informe o Whatsapp que receberá os pedidos', 'id'=>'whatsapp_phone', 'value'=>$restorant->whatsapp_phone],
]])  