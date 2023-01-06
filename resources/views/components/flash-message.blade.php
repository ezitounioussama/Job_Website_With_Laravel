@if (session()->has('message'))
<div role="alert"  x-data="{show: true}" x-init="setTimeout(()=> show = false , 5000)" x-show="show" class="bg-laravel fixed top-0 left-1/2 rounded-b-xl px-48 py-3 shadow-xl">
    <div class="flex items-start gap-4">
      <span class="text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </span>
  
      <div class="flex-1">
        <strong class="block font-medium text-white"> {{ session('message') }}</strong>
  
        
      </div>
  
      
    </div>
  </div>
  
    
@endif