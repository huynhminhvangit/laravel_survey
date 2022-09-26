<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create new Survey') }}
    </h2>
  </x-slot>
  <button onclick="alert('add')" title="Add Question" class="fixed z-90 bottom-10 right-8 bg-blue-600 w-10 h-10 rounded-full drop-shadow-sm flex justify-center items-center text-white text-sm hover:bg-blue-700 hover:drop-shadow-sm">
    Add
  </button>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <form method="POST" action="{{ route('surveys.store') }}">
        @csrf
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <!-- Title -->
            <div>
              <x-input-label for="title" :value="__('Title')" />

              <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4">
              <x-input-label for="description" :value="__('Description')" />

              <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
            </div>

          </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
          <div class="p-6 bg-white border-b border-gray-200">
            <!-- Title -->
            <div>
              <x-input-label for="title" :value="__('Title')" />

              <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4">
              <x-input-label for="countries" :value="__('Description')" />
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a country</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
              </select>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>