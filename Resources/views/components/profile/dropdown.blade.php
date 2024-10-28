<div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
  <button type="button" data-dropdown-toggle="profile-dropdown-menu"
      class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
      <x-filament::avatar src="{{ $_profile->getAvatarUrl() }}" />
  </button>

  <!-- Dropdown -->
  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
      id="profile-dropdown-menu">
      <ul class="py-2 font-medium" role="none">
          @can('go-to-admin')
          <li>
              <a href="{{ url('idoteca/admin/') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  role="menuitem">
                  <div class="inline-flex items-center  whitespace-nowrap">
                      <x-fas-toolbox class="h-3.5 w-3.5 me-2" />
                      Area admin
                  </div>
              </a>
          </li>
          @endcan
          <li>
              <a href="{{ route('logout') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                  role="menuitem">
                  <div class="inline-flex items-center">
                      <x-fas-sign-out-alt class="h-3.5 w-3.5 me-2" />
                      Log Out
                  </div>
              </a>
          </li>
      </ul>
  </div>
</div>
