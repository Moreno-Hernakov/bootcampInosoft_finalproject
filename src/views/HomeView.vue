<template>
  <div>

    <div class="text-3xl font-semibold text-gray-500 px-10 py-7 text-start">Dashboard Sidebar</div>

    <div class="pl-10">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="#"
              class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                </path>
              </svg>
              Vendor Management
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <a href="#"
                class="ml-1 text-sm font-medium text-teal-500 hover:text-teal-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">3rd
                Party Instruction</a>
            </div>
          </li>
        </ol>
      </nav>

    </div>

    <div class="px-10 w-full mt-5">
      <div class="p-5 bg-white dark:text-white dark:bg-zinc-800">

        <div class="w-full flex justify-between border-b">
          <div>
            <ul class="flex gap-10 text-gray-400 text-xl font-semibold cursor-pointer h-full">
              <li class="border-b-4 border-teal-300 pb-3 text-gray-700 dark:text-white">Open</li>
              <li class="hover:border-b-4 hover:border-teal-300 hover:pb-3 hover:text-gray-700 dark:hover:text-white">
                Completed</li>
            </ul>
          </div>

          <div class="flex gap-3 mb-3">
            <form action="" class="relative mx-auto w-max">
              <input type="search"
                class="peer cursor-pointer relative z-10 h-12 w-12 rounded-xl border bg-transparent outline-none focus:w-full focus:cursor-text focus:border-teal-300 focus:pl-16 focus:pr-4" />

              <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-teal-400 px-3.5 peer-focus:border-teal-300 peer-focus:stroke-teal-300"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </form>

            <div
              class="group border-2 border-gray-200 px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1 dark:border-gray-500 dark:hover:border-teal-500">
              <i class='bx bxs-file-export text-teal-400 text-2xl group-hover:text-white '></i>
              <h1 class="text-sm">Export</h1>
            </div>
          </div>
        </div>

        <div class="flex justify-end">
          <div class="my-5">
            <label @click="show = !show"
              class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

              <span class="relative text-base text-white">
                <i class='bx bx-plus text-xl'></i>Create 3rd Party Instruction</span>
              <div v-show="show" class="
          absolute
          mt-2
          bg-white
          rounded-md
          shadow-xl
          w-full
          text-start
        ">
                <router-link to="/createLogistic" class="
            flex
            px-4
            py-3
            text-sm 
            hover:bg-gray-200 
            items-center
          ">
                  <i class='bx bxs-truck text-2xl mr-5 text-teal-500'></i>
                  <p>Logistic Instruction</p>
                </router-link>
                <router-link to="/createService" class="
            px-4
            py-3
            text-sm 
            hover:bg-gray-200
            flex items-center
          ">
                  <i class='bx bx-cog text-2xl text-teal-500 mr-5'></i>
                  <p>
                    Service Instruction
                  </p>
                </router-link>
              </div>

            </label>
          </div>
        </div>
      </div>


      <div class="bg-white dark:bg p-8 rounded-md w-full dark:bg-zinc-800">
        <div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-4 py- overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Name
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      products
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Created at
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      QRT
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:text-white  dark:border-gray-600">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10">
                          <img class="w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                            alt="" />
                        </div>
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                            Vera Carpenter
                          </p>
                        </div>
                      </div>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">Admin</p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        Jan 21, 2020
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        43
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative text-white">Activo</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:text-white  dark:border-gray-600">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10">
                          <img class="w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                            alt="" />
                        </div>
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                            Vera Carpenter
                          </p>
                        </div>
                      </div>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">Admin</p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        Jan 21, 2020
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        43
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative text-white">Activo</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:text-white  dark:border-gray-600">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10">
                          <img class="w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                            alt="" />
                        </div>
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                            Vera Carpenter
                          </p>
                        </div>
                      </div>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">Admin</p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        Jan 21, 2020
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        43
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                      <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative text-white">Activo</span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    return {
      show: false,
    };
  },
}
</script>