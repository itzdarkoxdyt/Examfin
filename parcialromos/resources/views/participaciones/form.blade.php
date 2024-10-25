<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="eventos_id" class="form-label">{{ __('Eventos Id') }}</label>
            <input type="text" name="eventos_id" class="form-control @error('eventos_id') is-invalid @enderror" value="{{ old('eventos_id', $participaciones?->eventos_id) }}" id="eventos_id" placeholder="Eventos Id">
            {!! $errors->first('eventos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="organizadores_id" class="form-label">{{ __('Organizadores Id') }}</label>
            <input type="text" name="organizadores_id" class="form-control @error('organizadores_id') is-invalid @enderror" value="{{ old('organizadores_id', $participaciones?->organizadores_id) }}" id="organizadores_id" placeholder="Organizadores Id">
            {!! $errors->first('organizadores_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>