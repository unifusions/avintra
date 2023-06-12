<x-app-layout>
    <x-slot name="header">
         <h2 class="">
             {{ __('Settings') }}
         </h2>
         <div class="ms-5">
          <ul id="settingsNav" class="nav">
               <li class="nav-item">
                 <a class="nav-link {{  request()->routeIs('homepagesettings.edit') ? 'active' : '' }}" href="{{ route('homepagesettings.edit') }}">Home Page</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link {{  request()->routeIs('leadership.index') ? 'active' : '' }}" href="{{ route('leadership.index') }}">Leadership</a>
               </li>
             
              
             </ul>
 
             
 
      </div>
     </x-slot>

     

     <section class="mt-3">
      {{ $slot }}
  </section>


</x-app-layout>