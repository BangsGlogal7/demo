<x-layout>

      <x-slot:heading>
         Un employé
      </x-slot:heading>
      
       
            <div class="p-4 mb-4 bg-gray-600 rounded-lg">

                <h2 class="text-xl font-bold text-white">{{ $job->title }}</h2>
                <p class="text-gray-400">{{ $job->salary }} GNf</p>

               <p class="mt-6">
                 <x-button href="/jobs/{{ $job->id }}/edit">Modifier l'offre</x-button>
               </p>

            </div>
     
</x-layout>