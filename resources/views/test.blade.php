<x-form::input name="title" />


<x-form::input name="username" label="Username" prepend="@" />


<div class="mb-3">
    <x-form::input type="file" name="photos" label="Foto" multiple>
        <x-slot name="append">
            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Demo</button>
            </span>
        </x-slot>
    </x-form::input>
</div>
