<x-layout>

      <x-slot:heading>
         Un employé
      </x-slot:heading>
      
       
            <div class="p-4 mb-4 bg-gray-800 rounded-lg">

                <h2 class="text-xl font-bold text-white">{{ $job->title }}</h2>
                <p class="text-gray-400">{{ $job->salary }} GNf</p>
               
            </div>
     
</x-layout>