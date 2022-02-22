<div>
        @error('message')
        <div class="alert alert-warning">{{ $message }}</div>
        @enderror
    <form wire:submit.prevent="submit">
        @csrf
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" wire:model="message" style="height: 100px"></textarea>
            <label for="message">Deixe sua mensagem aqui</label>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="submit" class="btn btn-primary btn-lg px-4 gap-3">Enviar</button>

        </div>
    </form>

    <h1></h1>
</div>
