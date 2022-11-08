@php
$editable = old($type . '.editable', optional($registration->{ $type })->editable) && optional($registration->{ $type })->cuit;
@endphp
<div class="col-12 agency-input">
    <input type="hidden" name="{{ $type }}[editable]" id="{{ $type }}_editable" value="{{ old($type . '.editable', optional($registration->{ $type })->editable ?? 1) }}" />
    <div class="form-group row">
        <label for="{{ $type }}_cuit" class="col-12 col-sm-3 col-form-label">CUIT *</label>
        <div class="col-12 col-sm-3">
            <input type="text" class="form-control" name="{{ $type }}[cuit]" id="{{ $type }}_cuit"
                value="{{ old($type . '.cuit', optional($registration->{ $type })->cuit) }}">
        </div>

        <label for="{{ $type }}_name" class="col-12 col-sm-2 col-form-label">Razón Social</label>
        <div class="col-12 col-sm-4">
            <input type="text" class="form-control" name="{{ $type }}[name]" id="{{ $type }}_name"
                value="{{ old($type . '.name', optional($registration->{ $type })->name) }}" {{ $editable ? '' : 'disabled' }}>
        </div>
    </div>

    <div class="form-group row">
        <label for="{{ $type }}_address" class="col-12 col-sm-3 col-form-label">Domicilio</label>
        <div class="col-12 col-sm-9">
            <input type="text" class="form-control" name="{{ $type }}[address]" id="{{ $type }}_address"
                value="{{ old($type . '.address', optional($registration->{ $type })->address) }}" {{ $editable ? '' : 'disabled' }}>
        </div>
    </div>

    <div class="form-group row">

    


    <label for="{{ $type }}_phone" class="col-12 col-sm-3 col-form-label">Teléfono</label>
        <div class="form-group col-12 col-sm-3">
            <label for="phone_country">Cod País</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">+</span>
                </div>
                <input type="text" class="form-control" name="{{ $type }}[phone_country]" id="{{ $type }}phone_country"
                value="{{ old($type . '.phone_country', optional($registration->{ $type })->phone_country) }}" {{ $editable ? '' : 'disabled' }}>
            </div>
        </div>
        <div class="form-group col-12 col-sm-3">
            <label for="phone_area">Cod Área</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">(</span>
                </div>
                <input type="text" class="form-control" name="{{ $type }}[phone_area]" id="{{ $type }}_phone_area"
                value="{{ old($type . '.phone_area', optional($registration->{ $type })->phone_area) }}" {{ $editable ? '' : 'disabled' }}>
                <div class="input-group-append">
                    <span class="input-group-text">)</span>
                </div>
            </div>
        </div>
        <div class="form-group col-12 col-sm-3">
            <label for="phone_number">Número</label>
            <input type="text" class="form-control" name="{{ $type }}[phone]" id="{{ $type }}_phone"
                value="{{ old($type . '.phone', optional($registration->{ $type })->phone) }}" {{ $editable ? '' : 'disabled' }}>
        </div>


    </div>

    <div class="form-group row">
        <label for="{{ $type }}_email" class="col-12 col-sm-3 col-form-label">E-Mail</label>
        <div class="col-12 col-sm-4">
            <input type="text" class="form-control" name="{{ $type }}[email]" id="{{ $type }}_email"
                value="{{ old($type . '.email', optional($registration->{ $type })->email) }}" {{ $editable ? '' : 'disabled' }}>
        </div>
    </div>
</div>
