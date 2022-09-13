<div class="mb-2">
  <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $tasks->nama }}" placeholder="The name of task">

    @error('nama')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror

</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>   