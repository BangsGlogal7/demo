<x-layout>

  <x-slot:heading>Connection</x-slot:heading>

    <form method="POST" action="/login"> 
      
        @csrf

        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>  
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" type="email" name="email" required/>
                        </div>
                        <x-form-error name = "name"/>
                    </x-form-field>

                    <x-form-field>  
                        <x-form-label for="password">Mot de passe</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" type="password" name="password" required/>
                        </div>
                        <x-form-error name = "name"/>
                    </x-form-field>

                </div>
    
            </div>
            
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">

            <a href="/" class="text-sm/6 font-semibold text-gray-900">Annuler</button>
            <x-form-button>Connecter</x-form-button>

        </div>

    </form>
         
</x-layout>