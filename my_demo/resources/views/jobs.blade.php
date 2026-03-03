<x-layout>

      <x-slot:heading>
         Liste des emplois 
      </x-slot:heading>
      
     @foreach ($jobs as $job)
        <div class="p-4 mb-4 bg-gray-800 rounded-lg">

            <a href="jobs/{{ $job['id'] }}">
                  
                  <h2 class="text-xl font-bold text-white">{{ $job['title'] }}</h2>
                   <p class="text-gray-400">{{ $job['company'] }}</p>
            </a>
            
        </div>
     
     @endforeach
</x-layout>
  
