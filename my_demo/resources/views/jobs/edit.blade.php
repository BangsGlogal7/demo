<x-layout>

      <x-slot:heading>
        Modifier un emploi
      </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" >
      
        @csrf
        @method('PATCH')
      <div class="space-y-12">

          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              <div class="sm:col-span-4">

                <label for="title" class="block text-sm/6 font-medium text-gray-900">Titre</label>
                    <div class="mt-2">
                      <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input 
                          id="title" 
                          type="text" name="title" 
                          placeholder="Profile personnel" 
                          value="{{ $job->title }}" 
                          class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                          placeholder="Titre de l'emploi"
                          required
                        />
                      </div>
                    </div>

                    @error('title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                  </div>

                  <div class="sm:col-span-4">

                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salaire</label>
                    <div class="mt-2">
                      <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input 
                          id="salary" 
                          type="text" name="salary" 
                          placeholder="50000 GNF" 
                          value="{{ $job->salary }}" 
                          class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                          required
                        />
                      </div>
                    </div>

                    @error('salary')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                  </div>

          </div>
 
        </div>
        
      </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">

          <div class="flex items-center">
            <button form="delete-form" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
          </div>

          <div class="flex items-center gap-x-6">

            <div>

              <a href="/jobs/{{  $job->id }}" class="mt-6 items-center justify-end gap-x-6">Annuler</a>
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifier</button>

            </div>


          </div>
          
          
        </div>

  </form>

  <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
    @csrf
    @method('DELETE')
  </form>

     
</x-layout>