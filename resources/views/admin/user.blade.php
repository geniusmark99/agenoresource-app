
<x-admin-app-layout>
    <div class="flex flex-col dark:text-gray-200 justify-center items-center"  
    

    x-data="{
      isActive(route){
      return window.location.pathname === route;
  }}"
    >
<h1 class="text-xl lg:text-4xl ">STILL UNDER DEVELOPMENT, COMING SOON...</h1>
<div class="mt-10">

   user id: {{ $user->id }}<br/>
   user firstname {{ $user->firstname }}<br/>
   user lastname {{ $user->lastname }}
</div>

    </div>

</x-admin-app-layout>