<x-layout>

  <x-slot:heading> Créer un emploi </x-slot:heading>

  <form method="POST" action="/jobs"> 
      
    @csrf

    <div class="space-y-12">

      <div class="border-b border-gray-900/10 pb-12">

        <h2 class="text-base/7 font-semibold text-gray-900">Créer un nouvel emploi</h2>

        <p class="mt-1 text-sm/6 text-gray-600">Nous avons juste besoin de quelques détails de votre part.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <x-form-field>
            <x-form-label for="title">Titre</x-form-label>
            <div class="mt-2">
              <x-form-input id="title" type="text" name="title" placeholder="Développeur Web" required/>
            </div>
            <x-form-error name = "title"/>
          </x-form-field>

          <x-form-field>  
            <x-form-label for="salary">Salaire</x-form-label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <x-form-input id="salary" type="text" name="salary" placeholder="5000 0000 GNF" required/>
              </div>
            </div>
            <x-form-error name = "name"/>
          </x-form-field>

        </div>
 
      </div>
        
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Annuler</button>
      <x-form-button> Enregistrer </x-form-button>
    </div>

  </form>
         
</x-layout>