<div>
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2>Incrementa o decrementa di 1</h2>
            </div>
        </div>
    </div>

    <div>
        <h1 class="display-3">{{ $count }}</h1>
    
        <button class="btn btn-primary" wire:click="increment">+</button>
    
        <button class="btn btn-danger" wire:click="decrement">-</button>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2>Incrementa o decrementa di <input type="number" wire:model="number" required></h2>

                <h2>P.S. Bisogna lanciare due volte la funzione per rendere effettiva la modifica</h2>
                
            </div>
        </div>
    </div>

    <div>
        <h1 class="display-3">{{ $result }}</h1>
    
        <button class="btn btn-primary" wire:click="incrementByNumber({{ $number }})">+</button>
    
        <button class="btn btn-danger" wire:click="decrementByNumber({{ $number }})">-</button>
    </div>
    
</div>
