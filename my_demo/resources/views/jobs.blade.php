<x-layout>

      <x-slot:heading>
         Liste des emplois 
      </x-slot:heading>
      
     <div class="space-y-4 ">

            @foreach ($jobs as $job)

                  <a href="jobs/{{ $job->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        
                       <div class="font-bold text-blue-500 text-sm"> {{ $job->employer->name}}</div>

                        <div>
                               <strong class="text-lg">{{ $job->title }} : </strong> Payer a {{ number_format($job->salary, 0, ',', ' ') }} GNF par mois
                        </div>
                  </a>
             
            @endforeach
     </div>
     {{ $jobs->links() }}
</x-layout>
  
