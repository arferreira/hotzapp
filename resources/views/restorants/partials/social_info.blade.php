<br />
<h6 class="heading-small text-muted mb-4">{{ __('Aceita Pagamentos') }}</h6>
<!-- Payment explanation and Mollie payments -->
@include('partials.fields',['fields'=>[
    ['required'=>false,'ftype'=>'input','placeholder'=>"Informações de Pagamento",'name'=>'Informações ', 'additionalInfo'=>'Ex: Aceitamos pagamento na entrega em dinheiro ou cartão.', 'id'=>'payment_info', 'value'=>$restorant->payment_info],
    {{--['required'=>false,'ftype'=>'input','placeholder'=>"Mollie Payment API key",'name'=>'Mollie Payment API key', 'additionalInfo'=>'Accept Mollie.com payment by entering the mollie api key', 'id'=>'mollie_payment_key', 'value'=>$restorant->mollie_payment_key],--}}    
]])

@if (config('settings.is_whatsapp_ordering_mode'))
    @include('restorants.partials.waphone')
@endif



