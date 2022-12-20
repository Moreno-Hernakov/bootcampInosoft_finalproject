<template>
  <div>

    <div class="px-10 text-3xl font-semibold text-gray-500 py-7 text-start">Dashboard Sidebar</div>

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

    <div class="w-full px-10 mt-5">
      <div class="p-5 bg-white dark:text-white dark:bg-zinc-800">

        <div class="flex justify-between w-full border-b">
          <div>
            <ul class="flex h-full gap-10 text-xl font-semibold text-gray-400 cursor-pointer">
              <li class="pb-3 text-gray-700 border-b-4 border-teal-300 dark:text-white">Open</li>
              <li class="hover:border-b-4 hover:border-teal-300 hover:pb-3 hover:text-gray-700 dark:hover:text-white">
                Completed</li>
            </ul>
          </div>

          <div class="flex gap-3 mb-3">
            <form action="" class="relative mx-auto w-max">
              <input type="search"
                class="relative z-10 w-12 h-12 bg-transparent border outline-none cursor-pointer peer rounded-xl focus:w-full focus:cursor-text focus:border-teal-300 focus:pl-16 focus:pr-4" />

              <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-teal-400 px-3.5 peer-focus:border-teal-300 peer-focus:stroke-teal-300"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </form>

            <div
              class="group border-2 border-gray-200 px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1 dark:border-gray-500 dark:hover:border-teal-500">
              <i class='text-2xl text-teal-400 bx bxs-file-export group-hover:text-white '></i>
              <h1 class="text-sm">Export</h1>
            </div>
          </div>
        </div>

        <div class="flex justify-end">
          <div class="my-5">
            <label @click="show = !show"
              class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

              <span class="relative text-base text-white">
                <i class='text-xl bx bx-plus'></i>Create 3rd Party Instruction</span>
              <div v-show="show" class="absolute w-full mt-2 bg-white rounded-md shadow-xl text-start">
                <router-link :to="{ 
                  name: 'createInstruction',
                  params: { instruction: 'logistic' }
                }" class="flex items-center px-4 py-3 text-sm hover:bg-gray-200">
                  <i class='mr-5 text-2xl text-teal-500 bx bxs-truck'></i>
                  <p>Logistic Instruction</p>
                </router-link>
                <router-link :to="{
                  name: 'createInstruction',
                  params: { instruction: 'service' }
                }" class="flex items-center px-4 py-3 text-sm hover:bg-gray-200">
                  <i class='mr-5 text-2xl text-teal-500 bx bx-cog'></i>
                  <p>
                    Service Instruction
                  </p>
                </router-link>
              </div>

            </label>
          </div>
        </div>
      </div>


      <div class="w-full p-8 bg-white rounded-md dark:bg dark:bg-zinc-800">
        <div>
          <div class="px-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-4">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Instruction ID
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Link To
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Instruction Type
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Assigned Vendor
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Attention Of
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Quotation No.
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Customer PO
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Status
                    </th>
                    <th
                      class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200 dark:bg-zinc-700 dark:text-white dark:border-gray-700">
                      Detail
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="instruction in instructions" :key="instruction._id">
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-center text-gray-900 whitespace-no-wrap dark:text-white">{{ instruction.instruction_id }}</p>
                    </td>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-center text-gray-900 whitespace-no-wrap dark:text-white">{{ instruction.link_to }}</p>
                    </td>
                    <!-- <td
                      class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:text-white dark:border-gray-600">
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
                    </td> -->
                    <td
                      class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="font-semibold text-center text-gray-900 whitespace-no-wrap dark:text-white"><i class='mr-5 text-2xl text-gray-300 bx bxs-truck'></i> {{ instruction.type }}</p>
                    </td>
                    <td
                      class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-center text-gray-900 whitespace-no-wrap dark:text-white">
                        {{ instruction.assigned_vendor }}
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-center text-gray-900 whitespace-no-wrap dark:text-white">
                        {{ instruction.attention_of }}
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-center text-gray-900 whitespace-no-wrap dark:text-white">
                        {{ instruction.quotation }}
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 text-sm bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <p class="text-center text-gray-900 whitespace-no-wrap dark:text-white">
                        {{ instruction.customer_po }}
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <span class="relative inline-block px-4 py-2 font-semibold leading-tight text-green-900">
                        <span aria-hidden class="absolute inset-0 bg-[#E2EBF9] rounded-full"></span>
                        <span class="relative text-[#637ca0]" v-if="instruction.status == 0">
                          In Progress
                        </span>
                      </span>
                    </td>
                    <td
                      class="px-5 py-5 text-sm text-center bg-white border-b border-gray-200 dark:bg-zinc-900 dark:border-gray-600">
                      <span class="relative inline-block px-4 py-2 font-semibold leading-tight text-green-900">
                        <span aria-hidden class="absolute inset-0 bg-teal-200 rounded-full"></span>
                        <router-link :to="{
                          name: 'detailInstruction',
                          params: {
                            id: instruction._id
                          }
                        }" class="relative text-black" v-if="instruction.status == 0">
                          detail
                        </router-link>
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
  mounted() {
    this.getInstructions();
  },
  data() {
    return {
      show: false,
      instructions: [],
    };
  },
  methods: {
    getInstructions() {
      axios.get('/instruction/show_instruction/').then((res) => {
        this.instructions = res.data;
      });
    },
  },
}
</script>