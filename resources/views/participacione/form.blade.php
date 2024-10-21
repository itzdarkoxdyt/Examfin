<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="eventos_id" class="form-label">{{ __('Eventos Id') }}</label>
            <input type="text" name="eventos_id" class="form-control @error('eventos_id') is-invalid @enderror" value="{{ old('eventos_id', $participacione?->eventos_id) }}" id="eventos_id" placeholder="Eventos Id">
            {!! $errors->first('eventos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="organizador_id" class="form-label">{{ __('Organizador Id') }}</label>
            <input type="text" name="organizador_id" class="form-control @error('organizador_id') is-invalid @enderror" value="{{ old('organizador_id', $participacione?->organizador_id) }}" id="organizador_id" placeholder="Organizador Id">
            {!! $errors->first('organizador_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>