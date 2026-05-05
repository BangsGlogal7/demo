<x-layout>

  <x-slot:heading>Inscriptions </x-slot:heading>
   
    <form method="POST" action="/register"> 
      
        @csrf

        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="last_name">Prenom</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="last_name" type="text" name="last_name" required/>
                        </div>
                        <x-form-error name = "last_name"/>
                    </x-form-field>

                    <x-form-field>  
                        <x-form-label for="first_name">Nom</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="first_name" type="text" name="first_name" required/>
                        </div>
                        <x-form-error name = "first_name"/>
                    </x-form-field>

                    <x-form-field>  
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" type="email" name="email" required/>
                        </div>
                        <x-form-error name = "email"/>
                    </x-form-field>

                    <x-form-field>  
                        <x-form-label for="password">Mot de passe</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" type="password" name="password" required/>
                        </div>
                        <x-form-error name = "password"/>
                    </x-form-field>

                    <x-form-field>  
                        <x-form-label for="password_confirmation">Confirmer mot de passe</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" type="password" name="password_confirmation" required/>
                        </div>
                        <x-form-error name = "password_confirmation"/>
                    </x-form-field>

                </div>
    
            </div>
            
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" class="text-sm/6 font-semibold text-gray-900">Annuler</a>
        <x-form-button> S'inscrire </x-form-button>
        </div>

    </form>
         
</x-layout>